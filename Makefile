.DEFAULT_GOAL := extension

extension: custom/application/language/_override_en_us.IATI.php
# Make distribution folder - ignore if already exists.
	mkdir -p dist

# Setting permissions.
	chmod 775 manifest.php
	chmod 775 LICENSE.txt
	chmod 775 README.md
	chmod -R 775 custom

# Build extension zipfile
	zip -rq -FS dist/iati-registry-suitecrm-extension.zip manifest.php LICENSE.txt README.md custom/


rebuild_strings: language_app_strings_base.php
	python build_app_strings.py


all: rebuild_strings extension


clean:
	rm dist/*
	rm custom/application/language/_override_en_us.IATI.php
