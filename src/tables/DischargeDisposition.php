<?php


class DischargeDisposition
{
    public const Discharged_to_home_or_self_care = '01';
    public const transferred_to_another_short_term_general_hospital = '02';
    public const transferred_to_skilled_nursing_facility = '03';
    public const transferred_to_an_intermediate_care_facility = '04';
    public const transferred_to_another_type_of_institution = '05';
    public const transferred_to_home_under_care_of_organized_home_health_service_organization = '06';
    public const Left_against_medical_advice_or_discontinued_care = '07';
    public const transferred_to_home_under_care_of_Home_IV_provider = '08';
    public const Admitted_as_an_inpatient_to_this_hospital = '09';
    public const Discharge_to_be_defined_at_state_level_if_necessary = '10';
    public const Expired_dead = '20';
    public const Expired_to_be_defined_at_state_level_if_necessary = '21';
    public const Still_patient_or_expected_to_return_for_outpatient_services = '30';
    public const Still_patient_to_be_defined_at_state_level_if_necessary = '31';
    public const Expired_died_at_home = '40';
}