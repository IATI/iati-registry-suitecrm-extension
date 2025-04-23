<?php

$dictionary["IATI_Organisation_Actions"]["fields"]["iati_org_actions_actor_person"] = array(
  'name' => 'iati_org_actions_actor_person',
  'type' => 'link',
  'relationship' => 'iati_org_actions_actor_person',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => '',
  'id_name' => 'iati_organisation_actions_contactscontacts_ida',
);
$dictionary["IATI_Organisation_Actions"]["fields"]["iati_org_actions_actor_person_name"] = array(
  'name' => 'iati_org_actions_actor_person_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_IATI_ORGANISATION_ACTIONS_ACTOR_PERSON_NAME',
  'save' => true,
  'id_name' => 'iati_org_actions_actor_personcontacts_ida',
  'link' => 'iati_org_actions_actor_person',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' =>
  array(
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["IATI_Organisation_Actions"]["fields"]["iati_org_actions_actor_personcontacts_ida"] = array(
  'name' => 'iati_org_actions_actor_personcontacts_ida',
  'type' => 'link',
  'relationship' => 'iati_org_actions_actor_person',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_IATI_ORGANISATION_ACTIONS_ACTOR_PERSON_ID',
);
