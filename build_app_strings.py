"""Auto-generates PHP file that sets up custom SuiteCRM listboxes"""

import sys
from typing import TextIO

import pytz
import requests

# Publisher data sources
REPORTING_SOURCE_TYPES = {"primary_source": "Primary Source", "secondary_source": "Secondary Source"}

# Publication frequencies
REPORTING_FREQUENCIES = {
    "annually": "Annually",
    "monthly": "Monthly",
    "quarterly": "Quarterly",
    "six_monthly": "Six Monthly",
    "lt_annually": "Less than annually",
}

# Licences - taken from from IATI Dashboard: https://github.com/IATI/IATI-Dashboard/blob/live/iati_dashboard/text.py
LICENCES = {
    "notspecified": "Other::License Not Specified",
    "odc-pddl": "OKD Compliant::Open Data Commons Public Domain Dedication and Licence (PDDL)",
    "odc-odbl": "OKD Compliant::Open Data Commons Open Database License (ODbL)",
    "odc-by": "OKD Compliant::Open Data Commons Attribution Licence",
    "cc-zero": "OKD Compliant::Creative Commons CCZero",
    "cc-by": "OKD Compliant::Creative Commons Attribution",
    "cc-by-sa": "OKD Compliant::Creative Commcentation License",
    "ukclickusepsi": "OKD Compliant::UK Click Use PSI",
    "other-open": "OKD Compliant::Other (Open)",
    "other-pd": "OKD Compliant::Other (Public Domain)",
    "other-at": "OKD Compliant::Other (Attribution)",
    "ukcrown-withrights": "OKD Compliant::UK Crown Copyright with data.gov.uk rights",
    "hesa-withrights": "OKD Compliant::Higher Education Statistics Agency Copyright with data.gov.uk rights",
    "localauth-withrights": "OKD Compliant::Local Authority Copyright with data.gov.uk rights",
    "uk-ogl": "OKD Compliant::UK Open Government Licence (OGL)",
    "met-office-cp": "Non-OKD Compliant::Met Office UK Climate Projections Licence Agreement",
    "cc-nc": "Non-OKD Compliant::Creative Commons Non-Commercial (Any)",
    "ukcrown": "Non-OKD Compliant::UK Crown Copyright",
    "other-nc": "Non-OKD Compliant::Other (Non-Commercial)",
    "other-closed": "Non-OKD Compliant::Other (Not Open)",
    "bsd-license": "OSI Approved::New and Simplified BSD licenses",
    "gpl-2.0": "OSI Approved::GNU General Public License (GPL)",
    "gpl-3.0": "OSI Approved::GNU General Public License version 3.0 (GPLv3)",
    "lgpl-2.1": 'OSI Approved::GNU Library or "Lesser" General Public License (LGPL)',
    "mit-license": "OSI Approved::MIT license",
    "afl-3.0": "OSI Approved::Academic Free License 3.0 (AFL 3.0)",
    "apl1.0": "OSI Approved::Adaptive Public License",
    "apache": "OSI Approved::Apache Software License",
    "apache2.0": "OSI Approved::Apache License, 2.0",
    "apsl-2.0": "OSI Approved::Apple Public Source License",
    "artistic-license-2.0": "OSI Approved::Artistic license 2.0",
    "attribution": "OSI Approved::Attribution Assurance Licenses",
    "ca-tosl1.1": "OSI Approved::Computer Associates Trusted Open Source License 1.1",
    "cddl1": "OSI Approved::Common Development and Distribution License",
    "cpal_1.0": "OSI Approved::Common Public Attribution License 1.0 (CPAL)",
    "cuaoffice": "OSI Approved::CUA Office Public License Version 1.0",
    "eudatagrid": "OSI Approved::EU DataGrid Software License",
    "eclipse-1.0": "OSI Approved::Eclipse Public License",
    "ecl2": "OSI Approved::Educational Community License, Version 2.0",
    "eiffel": "OSI Approved::Eiffel Forum License",
    "ver2_eiffel": "OSI Approved::Eiffel Forum License V2.0",
    "entessa": "OSI Approved::Entessa Public License",
    "fair": "OSI Approved::Fair License",
    "frameworx": "OSI Approved::Frameworx License",
    "ibmpl": "OSI Approved::IBM Public License",
    "intel-osl": "OSI Approved::Intel Open Source License",
    "jabber-osl": "OSI Approved::Jabber Open Source License",
    "lucent-plan9": "OSI Approved::Lucent Public License (Plan9)",
    "lucent1.02": "OSI Approved::Lucent Public License Version 1.02",
    "mitre": "OSI Approved::MITRE Collaborative Virtual Workspace License (CVW License)",
    "motosoto": "OSI Approved::Motosoto License",
    "mozilla": "OSI Approved::Mozilla Public License 1.0 (MPL)",
    "mozilla1.1": "OSI Approved::Mozilla Public License 1.1 (MPL)",
    "nasa1.3": "OSI Approved::NASA Open Source Agreement 1.3",
    "naumen": "OSI Approved::Naumen Public License",
    "nethack": "OSI Approved::Nethack General Public License",
    "nokia": "OSI Approved::Nokia Open Source License",
    "oclc2": "OSI Approved::OCLC Research Public License 2.0",
    "opengroup": "OSI Approved::Open Group Test Suite License",
    "osl-3.0": "OSI Approved::Open Software License 3.0 (OSL 3.0)",
    "php": "OSI Approved::PHP License",
    "pythonpl": "OSI Approved::Python license",
    "PythonSoftFoundation": "OSI Approved::Python Software Foundation License",
    "qtpl": "OSI Approved::Qt Public License (QPL)",
    "real": "OSI Approved::RealNetworks Public Source License V1.0",
    "rpl1.5": "OSI Approved::Reciprocal Public License 1.5 (RPL1.5)",
    "ricohpl": "OSI Approved::Ricoh Source Code Public License",
    "sleepycat": "OSI Approved::Sleepycat License",
    "sun-issl": "OSI Approved::Sun Industry Standards Source License (SISSL)",
    "sunpublic": "OSI Approved::Sun Public License",
    "sybase": "OSI Approved::Sybase Open Watcom Public License 1.0",
    "UoI-NCSA": "OSI Approved::University of Illinois/NCSA Open Source License",
    "vovidapl": "OSI Approved::Vovida Software License v. 1.0",
    "W3C": "OSI Approved::W3C License",
    "wxwindows": "OSI Approved::wxWindows Library License",
    "xnet": "OSI Approved::X.Net License",
    "zpl": "OSI Approved::Zope Public License",
    "zlib-license": "OSI Approved::zlib/libpng license",
    "gfdl": "GNU Free Documentation License",
}


class CodelistError(Exception):
    """Exception raised when we cannot fetch and decode a codelist"""

    def __init__(self, error_msg: str = None):
        self.msg = f"Error fetching and decoding codelist ({error_msg})"


def format_codelist_to_php(
    url: str,
    comment: str,
    attribute_name: str,
    app_list_string_name: str,
    file_handle: TextIO,
    base: str = "https://iatistandard.org/reference_downloads/203/codelists/downloads/clv3/json/en/",
):
    """Fetch a codelist JSON and format as a SuiteCRM dropdown in PHP

    Parameters
    ----------
    url : str
        URL of the JSON file.
    comment : str
        Comment to include before the definition.
    attribute_name : str
        What attribute to write.
    app_list_string_name : str
        What to call the list string.
    file_handle : TextIO
        File handle to write the data to.
    base : str, optional.
        Base URL.
    """
    response = requests.get(base + url)

    if not response.ok:
        raise CodelistError(f"{attribute_name}: request failed ({response.reason}, {response.status_code})")
    response_json = response.json()
    if "data" not in response_json:
        raise CodelistError(f"{attribute_name}: no data in response")
    if "attributes" not in response_json:
        #        print(response_json)
        raise CodelistError(f"{attribute_name}: no attributes in response")
    if not response_json["attributes"].get("name", "") == attribute_name:
        raise CodelistError(f"{attribute_name}: attribute does not match expected")

    file_handle.write(f"/* {comment} */\n")
    file_handle.write(f"$app_list_strings['{app_list_string_name}'] = array (\n  '' => '',\n")
    for x in response_json["data"]:
        if "name" not in x or "code" not in x:
            raise CodelistError(f"{attribute_name}: do not understand attribute data: {x}\n")
        file_handle.write(f"  '{x["code"]}' => \"{x["name"]}\",\n")
    file_handle.write(");\n\n")


def format_dict_to_php(this_dict: dict, comment: str, app_list_string_name: str, file_handle: TextIO):
    """Format a dictionary as a SuiteCRM dropdown in PHP

    Parameters
    ----------
    this_dict : dict
        Dictionary to format.
    comment : str
        Comment to include before the definition.
    app_list_string_name : str
        What to call the list string.
    file_handle : TextIO
        File handle to write the data to.
    """

    file_handle.write(f"/* {comment} */\n")
    file_handle.write(f"$app_list_strings['{app_list_string_name}'] = array (\n  '' => '',\n")
    for k, v in this_dict.items():
        file_handle.write(f"  '{k}' => \"{v.replace("\"", "\\\"")}\",\n")
    file_handle.write(");\n\n")


def main():
    try:
        fh = open("custom/application/language/_override_en_us.IATI.php", "w")
        fh_base = open("language_app_strings_base.php", "r")

        for line in fh_base:
            if "/* INSERT IATI PREAMBLE */" in line:
                fh.write("/* This file is autogenerated - do not edit */\n")
            else:
                fh.write(line)

        format_codelist_to_php(
            "OrganisationType.json",
            "Dropdowns for organisation types from the codelist",
            "OrganisationType",
            "iati_org_type_dom",
            fh,
        )

        format_codelist_to_php(
            "Country.json",
            "Dropdowns for country codes from the codelist",
            "Country",
            "iati_country_dom",
            fh,
        )

        format_codelist_to_php(
            "Language.json",
            "Dropdowns for language codes from the codelist",
            "Language",
            "iati_language_dom",
            fh,
        )

        format_codelist_to_php(
            "Region.json",
            "Dropdowns for regions from the codelist",
            "Region",
            "iati_region_dom",
            fh,
        )

        format_dict_to_php(LICENCES, "Dropdowns for dataset licences", "iati_licence_dom", fh)

        format_dict_to_php(
            REPORTING_SOURCE_TYPES, "Dropdowns for reporting source types", "iati_reporting_source_type_dom", fh
        )

        format_dict_to_php(
            REPORTING_FREQUENCIES, "Dropdowns for reporting frequencies", "iati_reporting_frequencies_dom", fh
        )

        format_dict_to_php(
            {x: x for x in pytz.common_timezones}, "Timezones from the Olson database", "iati_timezone_dom", fh
        )

    except Exception as err:
        sys.exit(f"Failed to build app strings: {err}")


if __name__ == "__main__":
    main()
