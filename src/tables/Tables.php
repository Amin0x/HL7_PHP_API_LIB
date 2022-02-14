<?php
namespace amin0x\nabidh {

//Table NAB002: Marital Status
    function getMaritalStatusTable(string $val): CE|string
    {
        $result = '';

        switch ($val){
            case 'A': $result = new CE('A', 'Separated', 'NAB002'); break;
            case 'B': $result = new CE('B', 'Unmarried', 'NAB002'); break;
            case 'C': $result = new CE('C', 'CommonLaw', 'NAB002'); break;
            case 'D': $result = new CE('D', 'Divorced', 'NAB002'); break;
            case 'E': $result = new CE('E', 'LegallySeparated', 'NAB002'); break;
            case 'M': $result = new CE('M', 'Married', 'NAB002'); break;
            case 'N': $result = new CE('N', 'Annulled', 'NAB002'); break;
            case 'O': $result = new CE('O', 'Other', 'NAB002'); break;
            case 'S': $result = new CE('S', 'Single', 'NAB002'); break;
            case 'U': $result = new CE('U', 'Unknown', 'NAB002'); break;
            case 'G': $result = new CE('G', 'LivingTogether', 'NAB002'); break;
            case 'W': $result = new CE('W', 'Widowed', 'NAB002'); break;
            case 'I': $result = new CE('I', 'Interlocutory', 'NAB002'); break;
            case 'P': $result = new CE('P', 'DomesticPartner', 'NAB002'); break;
            case 'R': $result = new CE('R', 'RegisteredDomesticPartner', 'NAB002'); break;
            case 'T': $result = new CE('T', 'Unreported', 'NAB002'); break;
        }

        return $result;
    }

//Table NAB003: Religion
    function getReligionTable(string $val): CE|string
    {
        $result = '';

        switch ($val) {
            case 'BMA': $result = new CE('BMA', 'Buddhist: Mahayana', 'NAB003'); break;
            case 'BTH': $result = new CE('BTH', 'Buddhist: Theravada', 'NAB003');  break;
            case 'BUD': $result = new CE('BUD', 'Buddhist', 'NAB003'); break;
            case 'CAT': $result = new CE('CAT', 'Christian: Roman Catholic', 'NAB003'); break;
            case 'CHR': $result = new CE('CHR', 'Christian', 'NAB003'); break;
            case 'ERL': $result = new CE('ERL', 'Ethnic Religionist', 'NAB003'); break;
            case 'HIN': $result = new CE('HIN', 'Hindu', 'NAB003'); break;
            case 'HOT': $result = new CE('HOT', 'Hindu: Other', 'NAB003'); break;
            case 'MOS': $result = new CE('MOS', 'Muslim', 'NAB003'); break;
            case 'MOT': $result = new CE('MOT', 'Muslim: Other', 'NAB003'); break;
            case 'MSH': $result = new CE('MSH', 'Muslim: Shiite', 'NAB003'); break;
            case 'MSU': $result = new CE('MSU', 'Muslim: Sunni', 'NAB003'); break;
            case 'OTH': $result = new CE('OTH', 'Other', 'NAB003'); break;
            case 'SIK': $result = new CE('SIK', 'Sikh', 'NAB003'); break;
            case 'VAR': $result = new CE('VAR', 'Unknown', 'NAB003'); break;
            case 'PRE': $result = new CE('PRE', 'Christian: Presbyterian', 'NAB003'); break;
            case 'LUT': $result = new CE('LUT', 'Christian: Lutheran', 'NAB003'); break;
            case 'BAP': $result = new CE('BAP', 'Christian: Baptist', 'NAB003'); break;
            case 'JEW': $result = new CE('JEW', 'Jewish', 'NAB003'); break;
            case 'CHS': $result = new CE('CHS', 'Christian: Christian Science', 'NAB003'); break;
            case 'EPI': $result = new CE('EPI', 'Christian: Episcopalian', 'NAB003'); break;
            case 'GRE': $result = new CE('GRE', 'Christian: Greek Orthodox', 'NAB003'); break;
            case 'JWN': $result = new CE('JWN', 'Christian: Jehovah Witness', 'NAB003' ); break;
            case 'MEN': $result = new CE('MEN', 'Christian: Mennonite', 'NAB003' ); break;
            case 'MET': $result = new CE('MET', 'Christian: Methodist', 'NAB003'); break;
            case 'NAZ': $result = new CE('NAZ', 'Christian: Church of the Nazarene', 'NAB003'); break;
            case 'PEN': $result = new CE('PEN', 'Christian: Pentecostal', 'NAB003'); break;
            case 'PRO': $result = new CE('PRO', 'Christian: Protestant', 'NAB003'); break;
            case 'SEV': $result = new CE('SEV', 'Christian: Seventh Day Adventist', 'NAB003'); break;
            case 'UNU': $result = new CE('UNU', 'Christian: Unitarian Universalist', 'NAB003'); break;
            case 'SHN': $result = new CE('SHN', 'Shintoist', 'NAB003'); break;
            case 'ANG': $result = new CE('ANG', 'Christian: Anglican', 'NAB003'); break;
            case 'JAI': $result = new CE('JAI', 'Jain', 'NAB003'); break;
        }

        return $result;
    }

//Table NAB004: Race
    function getRaceTable(string $val): CE|string
    {
        $result = '';

        switch ($val) {
            case '1002-5': $result = new CE('1002-5', 'American', 'NAB004'); break;
            case '2028-9': $result = new CE('2028-9', 'Asian', 'NAB004'); break;
            case '2054-5': $result = new CE('2054-5', 'African', 'NAB004'); break;
            case '2106-3': $result = new CE('2106-3', 'European', 'NAB004'); break;
            case '2131-1': $result = new CE('2131-1', 'Other Race', 'NAB004'); break;
        }

        return $result;
    }

    //Table NAB006: Patient Class
    function getPatientClassTable(string $val): CE|string
    {
        $result = '';

        switch ($val) {
            case 'B': $result = new CE('B', 'Obstetrics', 'NAB006'); break;
            case 'I': $result = new CE('I', 'Inpatient', 'NAB006'); break;
            case 'C': $result = new CE('C', 'CommercialAccount', 'NAB006'); break;
            case 'R': $result = new CE('R', 'RecurringPatient', 'NAB006'); break;
            case 'E': $result = new CE('E', 'Emergency', 'NAB006'); break;
            case 'U': $result = new CE('U', 'Unknown', 'NAB006'); break;
            case 'N': $result = new CE('N', 'NotApplicable', 'NAB006'); break;
            case 'O': $result = new CE('O', 'Outpatient', 'NAB006'); break;
            case 'P': $result = new CE('P', 'Preadmit', 'NAB006'); break;
        }

        return $result;
    }


//Table NAB007: Admission Type
    function getAdmissionTypeTable(string $val): CE|string
    {
        $result = '';

        switch ($val) {
            case 'A': $result = new CE('A', 'Accident', 'NAB006'); break;
            case 'E': $result = new CE('E', 'Emergency', 'NAB006'); break;
            case 'C': $result = new CE('C', 'Elective', 'NAB006'); break;
            case 'L': $result = new CE('L', 'Labor and Delivery', 'NAB006'); break;
            case 'N': $result = new CE('N', 'Newborn', 'NAB006'); break;
            case 'U': $result = new CE('U', 'Urgent', 'NAB006'); break;
            case 'R': $result = new CE('R', 'Routine', 'NAB006'); break;
            case 'O': $result = new CE('O', 'Other', 'NAB006'); break;
        }

        return $result;
    }
//Table NAB008: Hospital Service
    function getHospitalServiceTable(string $val)
    {
        $result = '';

        switch ($val) {
            case 'ALG': $result = 'ALG'; break;  //Allergy
            case 'IMM': $result = 'IMM'; break;  //Immunology
            case 'ANE': $result = 'ANE'; break;  //Anesthesiology
            case 'CAR': $result = 'CAR'; break;  //Cardiology
            case 'DER': $result = 'DER'; break;  //Dermatology
            case 'END': $result = 'END'; break;  //Endocrinology
            case 'DIA': $result = 'DIA'; break;  //Diabetes
            case 'MET': $result = 'MET'; break;  //Metabolism
            case 'EMM': $result = 'EMM'; break;  //Emergency Medicine
            case 'FAP': $result = 'FAP'; break;  //Family Practice
            case 'GEP': $result = 'GEP'; break;  //General Practice
            case 'GER': $result = 'GER'; break;  //Geriatrics
            case 'INM': $result = 'INM'; break;  //Internal Medicine
            case 'MGE': $result = 'MGE'; break;  //Medical Genetics
            case 'NEU': $result = 'NEU'; break;  //Neurology
            case 'GYN': $result = 'GYN'; break;  //Gynaecology
            case 'OBS': $result = 'OBS'; break;  //Obstetrics
            case 'ONC': $result = 'ONC'; break;  //Oncology (Cancer)
            case 'OPH': $result = 'OPH'; break;  //Ophthalmology
            case 'ORT': $result = 'ORT'; break;  //Orthopedics
            case 'OTO': $result = 'OTO'; break;  //Otolaryngology
            case 'PAT': $result = 'PAT'; break;  //Pathology
            case 'PED': $result = 'PED'; break;  //Pediatrics
            case 'PMR': $result = 'PMR'; break;  //Physical Medicine & Rehab
            case 'PLS': $result = 'PLS'; break;  //Plastic Surgery
            case 'PRM': $result = 'PRM'; break;  //Preventive Medicine
            case 'PSY': $result = 'PSY'; break;  //Psychiatry
            case 'RAD': $result = 'RAD'; break;  //Radiology
            case 'SUR': $result = 'SUR'; break;  //Surgery
            case 'URO': $result = 'URO'; break;  //Urology
            case 'DEN': $result = 'DEN'; break;  //Dental
            case 'OTH': $result = 'OTH'; break;  //Other Medical
            case 'UZB': $result = 'UZB'; break;  //Uzbeks
            case 'ALB': $result = 'ALB'; break;  //Albanians
            case 'ARA': $result = 'ARA'; break;  //Arabs
            case 'SIN': $result = 'SIN'; break;  //Sindhis
            case 'HMO': $result = 'HMO'; break;  //Hmong people
            case 'KAZ': $result = 'KAZ'; break;  //Kazakhs
            case 'DRA': $result = 'DRA'; break;  //Dravidian peoples
            case 'TIB': $result = 'TIB'; break;  //Tibetan people
            case 'AMS': $result = 'AMS'; break;  //Amis people
            case 'LEZ': $result = 'LEZ'; break;  //Lezgins
            case 'FIJ': $result = 'FIJ'; break;  //Fijians
            case 'TAT': $result = 'TAT'; break;  //Tatars
            case 'BUR': $result = 'BUR'; break;  //Buryats
            case 'YAZ': $result = 'YAZ'; break;  //Yazidis
            case 'MES': $result = 'MES'; break;  //Mestizo
            case 'LEB': $result = 'LEB'; break;  //Lebanese people
            case 'TAJ': $result = 'TAJ'; break;  //Tajiks
            case 'YAO': $result = 'YAO'; break;  //Yao people
            case 'ROM': $result = 'ROM'; break;  //Romanians
            default: $result = 'UNK'; break;  //Unknown
        }

        return $result;
    }
//Table NAB042: Allergy Type Code
    function getAllergyTypeCodeTable(string $val): CE|string
    {
        $result = '';

        switch ($val) {
            case 'DA': $result = new CE('DA',   'Drug allergy', 'NAB042'); break;
            case 'FA': $result = new CE('FA',   'Food allergy', 'NAB042'); break;
            case 'MA': $result = new CE('MA',   'Miscellaneous allergy', 'NAB042'); break;
            case 'MC': $result = new CE('MC',   'Miscellaneous contraindication', 'NAB042'); break;
            case 'EA': $result = new CE('EA',   'Environmental Allergy', 'NAB042'); break;
            case 'AA': $result = new CE('AA',   'Animal Allergy', 'NAB042'); break;
            case 'PA': $result = new CE('PA',   'Plant Allergy', 'NAB042'); break;
            case 'LA': $result = new CE('LA',   'Pollen Allergy', 'NAB042'); break;
        }

        return $result;
    }

//Table SNOMED CT: Allergen
    function getAllergenTable(string $val)
    {
        $result = '';

        switch ($val)
        {
            case '15911003': $result = new CE('15911003',   'cow ilk protein sensitivity', 'NAB043'); break;
            case '25868003': $result = new CE('25868003', 'oy protein sensitivity', 'NAB043'); break;
            case '91930004': $result = new CE('91930004', 'allergy to eggs', 'NAB043'); break;
            case '91932007': $result = new CE('91932007', 'allergy to fruit', 'NAB043'); break;
            case '91934008': $result = new CE('91934008', 'allergy to nuts', 'NAB043'); break;
            case '91935009': $result = new CE('91935009', 'allergy to peanuts', 'NAB043'); break;
            case '91937001': $result = new CE('91937001', 'allergy to seafood', 'NAB043'); break;
            case '91938006': $result = new CE('91938006', 'allergy to strawberries', 'NAB043'); break;
            case '91940001': $result = new CE('91940001', 'allergy to walnuts', 'NAB043'); break;
            case '213020009': $result = new CE('213020009', 'egg protein allergy', 'NAB043'); break;
            case '293842000': $result = new CE('293842000', 'tryptophan allergy', 'NAB043'); break;
            case '294298002': $result = new CE('294298002', 'glycine allergy', 'NAB043'); break;
            case '294316000': $result = new CE('294316000', 'olive oil allergy', 'NAB043'); break;
            case '294317009': $result = new CE('294317009', 'Arachis oil allergy', 'NAB043'); break;
            case '294840004': $result = new CE('294840004', 'salcatonin allergy', 'NAB043'); break;
            case '294847001': $result = new CE('294847001', 'gelatin allergy', 'NAB043'); break;
            case '294968004': $result = new CE('294968004', 'fish oils allergy', 'NAB043'); break;
            case '294969007': $result = new CE('294969007', 'omega 3-marine triglycerides allergy', 'NAB043'); break;
            case '300912001': $result = new CE('300912001', 'chocolate allergy', 'NAB043'); break;
            case '300913006': $result = new CE('300913006', 'shellfish allergy', 'NAB043'); break;
            case '300914000': $result = new CE('300914000', 'cheese allergy', 'NAB043'); break;
            case '402388007': $result = new CE('402388007', 'allergic angioedema due to ingested food', 'NAB043'); break;
            case '409136006': $result = new CE('409136006', 'allergy to legumes', 'NAB043'); break;
            case '414314005': $result = new CE('414314005', 'gastrointestinal food allergy', 'NAB043'); break;
            case '417532002': $result = new CE('417532002', 'allergy to fish', 'NAB043'); break;
            case '417918006': $result = new CE('417918006', 'allergy to pork', 'NAB043'); break;
            case '418051002': $result = new CE('418051002', 'allergy to cherry', 'NAB043'); break;
            case '418085001': $result = new CE('418085001', 'allergy to citrus fruit', 'NAB043'); break;
            case '418184004': $result = new CE('418184004', 'allergy to rye', 'NAB043'); break;
            case '418314004': $result = new CE('418314004', 'allergy to apple juice', 'NAB043'); break;
            case '418397007': $result = new CE('418397007', 'allergy to cinnamon', 'NAB043'); break;
            case '418606003': $result = new CE('418606003', 'allergy to almond oil', 'NAB043'); break;
            case '418626004': $result = new CE('418626004', 'allergy to lobster', 'NAB043'); break;
            case '418779002': $result = new CE('418779002', 'allergy to tomato', 'NAB043'); break;
            case '418815008': $result = new CE('418815008', 'allergy to red meat', 'NAB043'); break;
            case '419101002': $result = new CE('419101002', 'allergy to seed', 'NAB043'); break;
            case '419298007': $result = new CE('419298007', 'allergy to watermelon', 'NAB043'); break;
            case '419342009': $result = new CE('419342009', 'allergy to oats', 'NAB043'); break;
            case '419573007': $result = new CE('419573007', 'allergy to corn', 'NAB043'); break;
            case '419619007': $result = new CE('419619007', 'allergy to potato', 'NAB043'); break;
            case '419814004': $result = new CE('419814004', 'allergy to coconut oil', 'NAB043'); break;
            case '419967000': $result = new CE('419967000', 'allergy to oyster', 'NAB043'); break;
            case '419972009': $result = new CE('419972009', 'allergy to shrimp', 'NAB043'); break;
            case '420080006': $result = new CE('420080006', 'allergy to carrot', 'NAB043'); break;
            case '420174000': $result = new CE('420174000', 'allergy to wheat', 'NAB043'); break;
            case '425525006': $result = new CE('425525006', 'allergy to dairy product', 'NAB043'); break;
            case '432807008': $result = new CE('432807008', 'pollen-food allergy', 'NAB043'); break;
            case '447961002': $result = new CE('447961002', 'allergy to dietary mushroom', 'NAB043'); break;
            case '188336009': $result = new CE('188336009', 'laboratory animal dander allergy', 'NAB043'); break;
            case '232346004': $result = new CE('232346004', 'allergy to cat dander', 'NAB043'); break;
            case '232347008': $result = new CE('232347008', 'dander animal allergy', 'NAB043'); break;
            case '232348003': $result = new CE('232348003', 'feather allergy', 'NAB043'); break;
            case '232349006': $result = new CE('232349006', 'house dust allergy', 'NAB043'); break;
            case '232350006': $result = new CE('232350006', 'house dust mite allergy', 'NAB043'); break;
            case '293641005': $result = new CE('293641005', 'diagnostic dye allergy', 'NAB043'); break;
            case '293785000': $result = new CE('293785000', 'paclitaxel allergy', 'NAB043'); break;
            case '293960001': $result = new CE('293960001', 'Disulfiram allergy', 'NAB043'); break;
            case '293977001': $result = new CE('293977001', 'labetalol allergy', 'NAB043'); break;
            case '293983003': $result = new CE('293983003', 'sotalol allergy', 'NAB043'); break;
            case '294037000': $result = new CE('294037000', 'salbutamol allergy', 'NAB043'); break;
            case '294118006': $result = new CE('294118006', 'clemastine allergy', 'NAB043'); break;
            case '294133003': $result = new CE('294133003', 'diphenhydramine allergy', 'NAB043'); break;
            case '294134009': $result = new CE('294134009', 'diphenylpyraline allergy', 'NAB043'); break;
            case '294136006': $result = new CE('294136006', 'mepyramine allergy', 'NAB043'); break;
            case '294179008': $result = new CE('294179008', 'sulfur allergy', 'NAB043'); break;
            case '294189007': $result = new CE('294189007', 'surgical tissue adhesive allergy', 'NAB043'); break;
            case '294190003': $result = new CE('294190003', 'enbucrilate allergy', 'NAB043'); break;
            case '294207001': $result = new CE('294207001', 'retinoid allergy', 'NAB043'); break;
            case '294208006': $result = new CE('294208006', 'etretinate allergy', 'NAB043'); break;
            case '294209003': $result = new CE('294209003', 'acitretin allergy', 'NAB043'); break;
            case '294210008': $result = new CE('294210008', 'tretinoin allergy', 'NAB043'); break;
            case '294211007': $result = new CE('294211007', 'isotretinoin allergy', 'NAB043'); break;
            case '294261003': $result = new CE('294261003', 'Terpenes allergy', 'NAB043'); break;
            case '294289000': $result = new CE('294289000', 'disodium edetate allergy', 'NAB043'); break;
            case '294307004': $result = new CE('294307004', 'citrate allergy', 'NAB043'); break;
            case '294322009': $result = new CE('294322009', 'base allergy', 'NAB043'); break;
            case '294324005': $result = new CE('294324005', 'paraffin allergy', 'NAB043'); break;
            case '294325006': $result = new CE('294325006', 'paraffin-yellow soft allergy', 'NAB043'); break;
            case '294326007': $result = new CE('294326007', 'paraffin-white soft allergy', 'NAB043'); break;
            case '294327003': $result = new CE('294327003', 'liquid paraffin allergy', 'NAB043'); break;
            case '294328008': $result = new CE('294328008', 'silicone allergy', 'NAB043'); break;
            case '294329000': $result = new CE('294329000', 'dimethicone allergy', 'NAB043'); break;
            case '294330005': $result = new CE('294330005', 'wool alcohol allergy', 'NAB043'); break;
            case '294332002': $result = new CE('294332002', 'polyvinyl alcohol allergy', 'NAB043'); break;
            case '294413007': $result = new CE('294413007', 'thymol allergy', 'NAB043'); break;
            case '294423003': $result = new CE('294423003', 'glutaraldehyde allergy', 'NAB043'); break;
            case '294444003': $result = new CE('294444003', 'disinfectant dye allergy', 'NAB043'); break;
            case '294445002': $result = new CE('294445002', 'acridine azo disinfectant dye allergy', 'NAB043'); break;
            case '294446001': $result = new CE('294446001', 'triphenylmethane azo disinfectant dye allergy', 'NAB043'); break;
            case '294447005': $result = new CE('294447005', 'crystal violet allergy', 'NAB043'); break;
            case '294448000': $result = new CE('294448000', 'brilliant green allergy', 'NAB043'); break;
            case '294479001': $result = new CE('294479001', 'hexamine hippurate allergy', 'NAB043'); break;
            case '294619002': $result = new CE('294619002', 'pesticide allergy', 'NAB043'); break;
            case '294620008': $result = new CE('294620008', 'benzyl benzoate allergy', 'NAB043'); break;
            case '294621007': $result = new CE('294621007', 'monosulfiram allergy', 'NAB043'); break;
            case '294622000': $result = new CE('294622000', 'carbamate pesticide allergy', 'NAB043'); break;
            case '294623005': $result = new CE('294623005', 'carbaryl allergy', 'NAB043'); break;
            case '294624004': $result = new CE('294624004', 'chlorinated pesticide allergy', 'NAB043'); break;
            case '294625003': $result = new CE('294625003', 'lindane allergy', 'NAB043'); break;
            case '294626002': $result = new CE('294626002', 'organophosphate pesticide allergy', 'NAB043'); break;
            case '294627006': $result = new CE('294627006', 'malathion allergy', 'NAB043'); break;
            case '294628001': $result = new CE('294628001', 'pyrethroid pesticides allergy', 'NAB043'); break;
            case '294629009': $result = new CE('294629009', 'phenothrin allergy', 'NAB043'); break;
            case '294630004': $result = new CE('294630004', 'Permethrin allergy', 'NAB043'); break;
            case '294667007': $result = new CE('294667007', 'Clostridium botulinum toxin allergy', 'NAB043'); break;
            case '294881007': $result = new CE('294881007', 'warfarin allergy', 'NAB043'); break;
            case '294917002': $result = new CE('294917002', 'multiple electrolyte infusion allergy', 'NAB043'); break;
            case '294918007': $result = new CE('294918007', 'enteral and supplement feeds allergy', 'NAB043'); break;
            case '294919004': $result = new CE('294919004', 'oral rehydration salts allergy', 'NAB043'); break;
            case '294962003': $result = new CE('294962003', 'cholestyramine allergy', 'NAB043'); break;
            case '295106007': $result = new CE('295106007', 'ethanolamine allergy', 'NAB043'); break;
            case '300908007': $result = new CE('300908007', 'perfume allergy', 'NAB043'); break;
            case '300910009': $result = new CE('300910009', 'allergy to pollen', 'NAB043'); break;
            case '300911008': $result = new CE('300911008', 'allergy to animal hair', 'NAB043'); break;
            case '300915004': $result = new CE('300915004', 'metal allergy', 'NAB043'); break;
            case '300916003': $result = new CE('300916003', 'latex allergy', 'NAB043'); break;
            case '390952000': $result = new CE('390952000', 'dust allergy', 'NAB043'); break;
            case '402306009': $result = new CE('402306009', 'allergy to aluminum', 'NAB043'); break;
            case '402389004': $result = new CE('402389004', 'allergic angioedema due to bite and/or sting', 'NAB043'); break;
            case '402591008': $result = new CE('402591008', 'allergy to biocide', 'NAB043'); break;
            case '402594000': $result = new CE('402594000', 'allergy to plant', 'NAB043'); break;
            case '402595004': $result = new CE('402595004', 'allergy to wood', 'NAB043'); break;
            case '402596003': $result = new CE('402596003', 'allergy to lichen', 'NAB043'); break;
            case '402597007': $result = new CE('402597007', 'allergy to tree resin', 'NAB043'); break;
            case '402598002': $result = new CE('402598002', 'allergy to flavor', 'NAB043'); break;
            case '417930000': $result = new CE('417930000', 'allergy to adhesive', 'NAB043'); break;
            case '417982003': $result = new CE('417982003', 'allergy to cosmetic', 'NAB043'); break;
            case '418545001': $result = new CE('418545001', 'allergy to dye', 'NAB043'); break;
            case '418561004': $result = new CE('418561004', 'allergy to ragweed pollen', 'NAB043'); break;
            case '418689008': $result = new CE('418689008', 'allergy to grass pollen', 'NAB043'); break;
            case '418968001': $result = new CE('418968001', 'allergy to gauze', 'NAB043'); break;
            case '419063004': $result = new CE('419063004', 'allergy to horse dander', 'NAB043'); break;
            case '419199007': $result = new CE('419199007', 'allergy to substance', 'NAB043'); break;
            case '419210001': $result = new CE('419210001', 'allergy to weed pollen', 'NAB043'); break;
            case '419238009': $result = new CE('419238009', 'allergy to adhesive bandage', 'NAB043'); break;
            case '419263009': $result = new CE('419263009', 'allergy to tree pollen', 'NAB043'); break;
            case '419271008': $result = new CE('419271008', 'allergy to dog dander', 'NAB043'); break;
            case '419412007': $result = new CE('419412007', 'allergy to rubber', 'NAB043'); break;
            case '419474003': $result = new CE('419474003', 'allergy to mold', 'NAB043'); break;
            case '419788000': $result = new CE('419788000', 'allergy to nickel', 'NAB043'); break;
            case '422921000': $result = new CE('422921000', 'allergy to scorpion venom', 'NAB043'); break;
            case '423058007': $result = new CE('423058007', 'allergy to wasp venom', 'NAB043'); break;
            case '424213003': $result = new CE('424213003', 'allergy to bee venom', 'NAB043'); break;
            case '425605001': $result = new CE('425605001', 'allergy to wool', 'NAB043'); break;
            case '427487000': $result = new CE('427487000', 'allergy to spider venom', 'NAB043'); break;
        }

        return $result;

    }

    function getRelationshipTable(string $val): Ce|string
    {
        $result = '';

        switch ($val){
            case 'ASC': $result = new CE('ASC', 'Associate','NAB041'); break;
            case 'BRO': $result = new CE('BRO', 'Brother','NAB041'); break;
            case 'CGV': $result = new CE('CGV', 'Care giver','NAB041'); break;
            case 'CHD': $result = new CE('CHD', 'Child','NAB041'); break;
            case 'DEP': $result = new CE('DEP', 'Handicapped dependent','NAB041'); break;
            case 'DOM': $result = new CE('DOM', 'Life partner','NAB041'); break;
            case 'EMC': $result = new CE('EMC', 'Emergency contact','NAB041'); break;
            case 'EME': $result = new CE('EME', 'Employee','NAB041'); break;
            case 'EMR': $result = new CE('EMR', 'Employer','NAB041'); break;
            case 'EXF': $result = new CE('EXF', 'Extended family','NAB041'); break;
            case 'FCH': $result = new CE('FCH', 'Foster child','NAB041'); break;
            case 'FND': $result = new CE('FND', 'Friend','NAB041'); break;
            case 'FTH': $result = new CE('FTH', 'Father','NAB041'); break;
            case 'GCH': $result = new CE('GCH', 'Grandchild','NAB041'); break;
            case 'GRD': $result = new CE('GRD', 'Guardian','NAB041'); break;
            case 'GRP': $result = new CE('GRP', 'Grandparent','NAB041'); break;
            case 'MGR': $result = new CE('MGR', 'Manager','NAB041'); break;
            case 'MTH': $result = new CE('MTH', 'Mother','NAB041'); break;
            case 'NCH': $result = new CE('NCH', 'Natural child','NAB041'); break;
            case 'NON': $result = new CE('NON', 'None','NAB041'); break;
            case 'OAD': $result = new CE('OAD', 'Other adult','NAB041'); break;
            case 'OTH': $result = new CE('OTH', 'Other','NAB041'); break;
            case 'OWN': $result = new CE('OWN', 'Owner','NAB041'); break;
            case 'PAR': $result = new CE('PAR', 'Parent','NAB041'); break;
            case 'SCH': $result = new CE('SCH', 'Stepchild','NAB041'); break;
            case 'SEL': $result = new CE('SEL', 'Self','NAB041'); break;
            case 'SIB': $result = new CE('SIB', 'Sibling','NAB041'); break;
            case 'SIS': $result = new CE('SIS', 'Sister','NAB041'); break;
            case 'SPO': $result = new CE('SPO', 'Spouse','NAB041'); break;
            case 'TRA': $result = new CE('TRA', 'Trainer','NAB041'); break;
            case 'UNK': $result = new CE('UNK', 'Unknown','NAB041'); break;
            case 'WRD': $result = new CE('WRD', 'Ward of court','NAB041'); break;
        }

        return $result;
    }

//Table NAB030: Order Control
    function getOrderControlTable(string $val)
    {
        $result = '';
        switch ($val){
            case 'AF': $result = new CE('AF', 'Order/service refill request approval', 'NAB030'); break;
            case 'CA': $result = new CE('CA', 'Cancel order/service request', 'NAB030'); break;
            case 'CH': $result = new CE('CH', 'Child order/service', 'NAB030'); break;
            case 'CN': $result = new CE('CN', 'Combined result', 'NAB030'); break;
            case 'CR': $result = new CE('CR', 'Canceled as requested', 'NAB030'); break;
            case 'DC': $result = new CE('DC', 'Discontinue order/service request', 'NAB030'); break;
            case 'DE': $result = new CE('DE', 'Data errors', 'NAB030'); break;
            case 'DF': $result = new CE('DF', 'Order/service refill request denied', 'NAB030'); break;
            case 'DR': $result = new CE('DR', 'Discontinued as requested', 'NAB030'); break;
            case 'FU': $result = new CE('FU', 'Order/service refilled, unsolicited', 'NAB030'); break;
            case 'HD': $result = new CE('HD', 'Hold order request', 'NAB030'); break;
            case 'HR': $result = new CE('HR', 'On hold as requested', 'NAB030'); break;
            case 'LI': $result = new CE('LI', 'Link order/service to patient care problem or g', 'NAB030'); break;
            case 'NA': $result = new CE('NA', 'Number assigned', 'NAB030'); break;
            case 'NW': $result = new CE('NW', 'New order/service', 'NAB030'); break;
            case 'OC': $result = new CE('OC', 'Order/service canceled', 'NAB030'); break;
            case 'OD': $result = new CE('OD', 'Order/service discontinued', 'NAB030'); break;
            case 'OE': $result = new CE('OE', 'Order/service released', 'NAB030'); break;
            case 'OF': $result = new CE('OF', 'Order/service refilled as requested', 'NAB030'); break;
            case 'OH': $result = new CE('OH', 'Order/service held', 'NAB030'); break;
            case 'OK': $result = new CE('OK', 'Order/service accepted & OK', 'NAB030'); break;
            case 'OP': $result = new CE('OP', 'Notification of order for outside dispense', 'NAB030'); break;
            case 'OR': $result = new CE('OR', 'Released as requested', 'NAB030'); break;
            case 'PA': $result = new CE('PA', 'Parent order/service', 'NAB030'); break;
            case 'PR': $result = new CE('PR', 'Previous Results with new order/service', 'NAB030'); break;
            case 'PY': $result = new CE('PY', 'Notification of replacement order', 'NAB030'); break;
            case 'RE': $result = new CE('RE', 'Observations/Performed Service to', 'NAB030'); break;
            case 'RF': $result = new CE('RF', 'Refill order/service request', 'NAB030'); break;
            case 'RL': $result = new CE('RL', 'Release previous hold', 'NAB030'); break;
            case 'RO': $result = new CE('RO', 'Replacement order', 'NAB030'); break;
            case 'RP': $result = new CE('RP', 'Order/service replace request', 'NAB030'); break;
            case 'RQ': $result = new CE('RQ', 'Replaced as requested', 'NAB030'); break;
            case 'RR': $result = new CE('RR', 'Request received', 'NAB030'); break;
            case 'RU': $result = new CE('RU', 'Replaced unsolicited', 'NAB030'); break;
            case 'SC': $result = new CE('SC', 'Status changed', 'NAB030'); break;
            case 'SN': $result = new CE('SN', 'Send order/service number', 'NAB030'); break;
            case 'SR': $result = new CE('SR', 'Response to send order/service sta', 'NAB030'); break;
            case 'SS': $result = new CE('SS', 'Send order/service status request', 'NAB030'); break;
            case 'UA': $result = new CE('UA', 'Unable to accept order/service', 'NAB030'); break;
            case 'UC': $result = new CE('UC', 'Unable to cancel', 'NAB030'); break;
            case 'UD': $result = new CE('UD', 'Unable to discontinue', 'NAB030'); break;
            case 'UF': $result = new CE('UF', 'Unable to refill', 'NAB030'); break;
            case 'UH': $result = new CE('UH', 'Unable to put on hold', 'NAB030'); break;
            case 'UM': $result = new CE('UM', 'Unable to replace', 'NAB030'); break;
            case 'UN': $result = new CE('UN', 'Unlink order/service from patient', 'NAB030'); break;
            case 'UR': $result = new CE('UR', 'Unable to release', 'NAB030'); break;
            case 'UX': $result = new CE('UX', 'Unable to change', 'NAB030'); break;
            case 'XO': $result = new CE('XO', 'Change order/service request', 'NAB030'); break;
            case 'XR': $result = new CE('XR', 'Changed as requested', 'NAB030'); break;
            case 'XX': $result = new CE('XX', 'Order/service changed, unsol.', 'NAB030'); break;
        }
        return $result;
    }
}
//HL7128 table
//HL7072 table


