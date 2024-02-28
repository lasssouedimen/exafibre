<?php

declare(strict_types=1);

return [
    'accepted'             => 'I-:attribute kufuneka yamkelwe.',
    'accepted_if'          => 'I-:attribute kufuneka yamkelwe xa i-:other ingama-:value.',
    'active_url'           => 'I-:attribute ayiyiyo i-URL esebenzayo.',
    'after'                => 'I-:attribute kufuneka ibe ngumhla osemva kwe-:date.',
    'after_or_equal'       => 'I-:attribute kufuneka ibe ngumhla osemva okanye olingana no-:date.',
    'alpha'                => 'I-:attribute kufuneka ibe noonobumba kuphela.',
    'alpha_dash'           => 'I-:attribute kufuneka iqulathe kuphela oonobumba, amanani, iidashi kunye nee-underscore.',
    'alpha_num'            => 'I-:attribute kufuneka iqulathe kuphela oonobumba kunye namanani.',
    'array'                => 'I-:attribute kufuneka ibe luluhlu.',
    'ascii'                => 'Indawo ye-:attribute kufuneka iqulathe kuphela amagama e-alphanumeric kunye neesimboli zebhayithi enye.',
    'before'               => 'I-:attribute kufuneka ibe ngumhla ophambi kwe-:date.',
    'before_or_equal'      => 'I-:attribute kufuneka ibe ngumhla ophambi okanye olingana no-:date.',
    'between'              => [
        'array'   => 'I-:attribute kufuneka ibe phakathi kwe-:min kunye ne-:max yezinto.',
        'file'    => 'I-:attribute mayibe phakathi kwama-:min nama-:max ekhilobhayithi.',
        'numeric' => 'I-:attribute kufuneka ibe phakathi kwama-:min nama-:max.',
        'string'  => 'I-:attribute kufuneka ibe phakathi kwama-:min kunye nama-:max oonobumba.',
    ],
    'boolean'              => 'Ibala le-:attribute kufuneka libe yinyani okanye bubuxoki.',
    'can'                  => 'Intsimi ye-:attribute iqulethe ixabiso elingagunyaziswanga.',
    'confirmed'            => 'Ukuqinisekiswa kwe-:attribute akuhambelani.',
    'current_password'     => 'Igama lokugqitha alichanekanga.',
    'date'                 => 'I-:attribute ayingomhla osemthethweni.',
    'date_equals'          => 'I-:attribute kufuneka ibe ngumhla olingana nama-:date.',
    'date_format'          => 'I-:attribute ayihambelani nefomathi yama-:format.',
    'decimal'              => 'Indawo ye-:attribute kufuneka ibe neendawo ezingama-:decimal.',
    'declined'             => 'I-:attribute kufuneka yaliwe.',
    'declined_if'          => 'I-:attribute kufuneka yaliwe xa i-:other ingama-:value.',
    'different'            => 'I-:attribute kunye ne-:other kufuneka zahluke.',
    'digits'               => 'I-:attribute kufuneka ibe namanani angama-:digits.',
    'digits_between'       => 'I-:attribute kufuneka ibe phakathi kwama-:min nama-:max amanani.',
    'dimensions'           => 'I-:attribute inemilinganiselo yomfanekiso engasebenziyo.',
    'distinct'             => 'Intsimi ye-:attribute inexabiso eliphindwe kabini.',
    'doesnt_end_with'      => 'Intsimi ye-:attribute mayingapheli ngenye yezi zilandelayo: :values.',
    'doesnt_start_with'    => 'Intsimi ye-:attribute mayingaqali ngenye yezi zilandelayo: :values.',
    'email'                => 'I-:attribute kufuneka ibe yidilesi ye-imeyile esebenzayo.',
    'ends_with'            => 'I-:attribute mayiphele ngenye yezi zilandelayo: :values.',
    'enum'                 => 'I-:attribute ekhethiweyo ayisebenzi.',
    'exists'               => 'I-:attribute ekhethiweyo ayisebenzi.',
    'extensions'           => 'Ibala le-:attribute kufuneka libe nesinye sezi zandiso zilandelayo: :values.',
    'file'                 => 'I-:attribute kufuneka ibe yifayile.',
    'filled'               => 'Umhlaba we-:attribute kufuneka ube nexabiso.',
    'gt'                   => [
        'array'   => 'I-:attribute kufuneka ibe nezinto ezingaphezu kwama-:value.',
        'file'    => 'I-:attribute mayibe ngaphezu kwe-:value kilobytes.',
        'numeric' => 'I-:attribute kufuneka ibe nkulu kuno-:value.',
        'string'  => 'I-:attribute kufuneka ibe ngaphezu kwamagama angama-:value.',
    ],
    'gte'                  => [
        'array'   => 'I-:attribute kufuneka ibe nezinto ezingama-:value okanye ngaphezulu.',
        'file'    => 'I-:attribute mayibe nkulu okanye ilingane neekhilobhayithi ezingama-:value.',
        'numeric' => 'I-:attribute kufuneka libe likhulu okanye lilingane no-:value.',
        'string'  => 'I-:attribute kufuneka ibe nkulu okanye ilingane noonobumba abangama-:value.',
    ],
    'hex_color'            => 'Umhlaba we-:attribute kufuneka ube ngumbala osebenzayo we-hexadecimal.',
    'image'                => 'I-:attribute kufuneka ibe ngumfanekiso.',
    'in'                   => 'I-:attribute ekhethiweyo ayisebenzi.',
    'in_array'             => 'Ibala le-:attribute alikho kwi-:other.',
    'integer'              => 'I-:attribute kufuneka ibe yinani elipheleleyo.',
    'ip'                   => 'I-:attribute kufuneka ibe yidilesi ye-IP esebenzayo.',
    'ipv4'                 => 'I-:attribute kufuneka ibe yidilesi ye-IPv4 esebenzayo.',
    'ipv6'                 => 'I-:attribute kufuneka ibe yidilesi ye-IPv6 esebenzayo.',
    'json'                 => 'I-:attribute kufuneka ibe ngumtya we-JSON osebenzayo.',
    'lowercase'            => 'Ibala le-:attribute kufuneka libe ngoonobumba abancinci.',
    'lt'                   => [
        'array'   => 'I-:attribute kufuneka ibe nezinto ezingaphantsi kwama-:value.',
        'file'    => 'I-:attribute mayibe ngaphantsi kwe-:value kilobytes.',
        'numeric' => 'I-:attribute kufuneka ibe ngaphantsi kwama-:value.',
        'string'  => 'I-:attribute kufuneka ibe ngaphantsi koonobumba abangama-:value.',
    ],
    'lte'                  => [
        'array'   => 'I-:attribute mayingabi nezinto ezingaphezu kwama-:value.',
        'file'    => 'I-:attribute mayibe ngaphantsi okanye ilingane neekhilobhayithi ezingama-:value.',
        'numeric' => 'I-:attribute kufuneka libe ngaphantsi okanye lilingane no-:value.',
        'string'  => 'I-:attribute kufuneka ibe ngaphantsi okanye ilingane noonobumba abangama-:value.',
    ],
    'mac_address'          => 'I-:attribute kufuneka ibe yidilesi ye-MAC esebenzayo.',
    'max'                  => [
        'array'   => 'I-:attribute mayingabi nezinto ezingaphezu kwama-:max.',
        'file'    => 'I-:attribute mayingabi ngaphezu kweekhilobhayithi ezingama-:max.',
        'numeric' => 'I-:attribute kufuneka ingabi ngaphezu kwama-:max.',
        'string'  => 'I-:attribute kufuneka ingabi ngaphezu kwamagama angama-:max.',
    ],
    'max_digits'           => 'Indawo ye-:attribute kufuneka ingabi namanani angaphezu kwama-:max.',
    'mimes'                => 'I-:attribute kufuneka ibe yifayile yohlobo: :values.',
    'mimetypes'            => 'I-:attribute kufuneka ibe yifayile yohlobo: :values.',
    'min'                  => [
        'array'   => 'I-:attribute kufuneka ibe nezinto ezingama-:min ubuncinane.',
        'file'    => 'I-:attribute kufuneka ibe yi-:min kilobytes ubuncinane.',
        'numeric' => 'I-:attribute kufuneka ibe ngama-:min ubuncinane.',
        'string'  => 'I-:attribute kufuneka ibe namagama angama-:min ubuncinci.',
    ],
    'min_digits'           => 'Indawo ye-:attribute kufuneka ibe namanani angama-:min ubuncinci.',
    'missing'              => 'Ibala le-:attribute kufuneka lilahlekile.',
    'missing_if'           => 'Ibala le-:attribute kufuneka lilahlekile xa u-:other engama-:value.',
    'missing_unless'       => 'Ibala le-:attribute kufuneka lilahlekile ngaphandle kokuba ama-:other ngama-:value.',
    'missing_with'         => 'I-:attribute field kufuneka ilahlekile xa i-:values ikhona.',
    'missing_with_all'     => 'I-:attribute field kufuneka ilahlekile xa i-:values bekhona.',
    'multiple_of'          => 'I-:attribute kufuneka ibe yi-multiple of :value.',
    'not_in'               => 'I-:attribute ekhethiweyo ayisebenzi.',
    'not_regex'            => 'Ifomati ye-:attribute ayisebenzi.',
    'numeric'              => 'U-:attribute kufuneka abe linani.',
    'password'             => [
        'letters'       => 'Indawo ye-:attribute kufuneka iqulathe ubuncinci unobumba omnye.',
        'mixed'         => 'Intsimi ye-:attribute kufuneka iqulethe ubuncinane omnye unobumba omkhulu kunye nonobumba omncinci omnye.',
        'numbers'       => 'Indawo ye-:attribute kufuneka iqulathe ubuncinane inani elinye.',
        'symbols'       => 'Indawo ye-:attribute kufuneka iqulathe ubuncinci isimboli enye.',
        'uncompromised' => 'I-:attribute enikiweyo ivele kwidatha evuzayo. Nceda ukhethe i-:attribute eyahlukileyo.',
    ],
    'present'              => 'Ibala le-:attribute kufuneka libekho.',
    'present_if'           => 'Ibala le-:attribute kufuneka libekho xa ama-:other engama-:value.',
    'present_unless'       => 'Ibala le-:attribute kufuneka libe khona ngaphandle kokuba ama-:other ngama-:value.',
    'present_with'         => 'Ibala le-:attribute kufuneka libekho xa i-:values ikhona.',
    'present_with_all'     => 'Intsimi ye-:attribute kufuneka ibe khona xa i-:values bekhona.',
    'prohibited'           => 'Intsimi ye-:attribute ayivumelekanga.',
    'prohibited_if'        => 'Intsimi ye-:attribute ayivumelekanga xa i-:other i-:value.',
    'prohibited_unless'    => 'Intsimi ye-:attribute ayivumelekanga ngaphandle kokuba i-:other ikwi-:values.',
    'prohibits'            => 'Ibala le-:attribute lithintela ama-:other ukuba abekho.',
    'regex'                => 'Ifomati ye-:attribute ayisebenzi.',
    'required'             => 'Intsimi ye-:attribute iyafuneka.',
    'required_array_keys'  => 'Ummandla we-:attribute kufuneka ube namangenelo: :values.',
    'required_if'          => 'Intsimi ye-:attribute iyafuneka xa i-:other ingama-:value.',
    'required_if_accepted' => 'Intsimi ye-:attribute iyafuneka xa i-:other yamkelwe.',
    'required_unless'      => 'Intsimi ye-:attribute iyafuneka ngaphandle kokuba i-:other ikwi-:values.',
    'required_with'        => 'Intsimi ye-:attribute iyadingeka xa i-:values ikhona.',
    'required_with_all'    => 'Intsimi ye-:attribute iyadingeka xa i-:values ikhona.',
    'required_without'     => 'Intsimi ye-:attribute iyadingeka xa i-:values ingekho.',
    'required_without_all' => 'Intsimi ye-:attribute iyafuneka xa kungekho nanye kwi-:values ekhoyo.',
    'same'                 => 'I-:attribute kunye ne-:other kufuneka ihambelane.',
    'size'                 => [
        'array'   => 'I-:attribute kufuneka ibe nezinto ezingama-:size.',
        'file'    => 'I-:attribute kufuneka ibe yi-:size kilobytes.',
        'numeric' => 'I-:attribute kufuneka ibe ngama-:size.',
        'string'  => 'I-:attribute kufuneka ibe ngamagama angama-:size.',
    ],
    'starts_with'          => 'I-:attribute kufuneka iqale ngenye yezi zilandelayo: :values.',
    'string'               => 'I-:attribute kufuneka ibe ngumtya.',
    'timezone'             => 'I-:attribute kufuneka ibe ngummandla wexesha osebenzayo.',
    'ulid'                 => 'Indawo ye-:attribute mayibe yi-LID esemthethweni.',
    'unique'               => 'I-:attribute sele ithathiwe.',
    'uploaded'             => 'I-:attribute ayiphumelelanga ukulayisha.',
    'uppercase'            => 'Ibala le-:attribute kufuneka libe ngoonobumba abakhulu.',
    'url'                  => 'I-:attribute kufuneka ibe yi-URL esebenzayo.',
    'uuid'                 => 'I-:attribute kufuneka ibe yi-UUID esebenzayo.',
    'attributes'           => [
        'address'                  => 'idilesi',
        'affiliate_url'            => 'i-URL edibeneyo',
        'age'                      => 'ubudala',
        'amount'                   => 'isixa',
        'area'                     => 'indawo',
        'available'                => 'ekhoyo',
        'birthday'                 => 'usuku lokuzalwa',
        'body'                     => 'umzimba',
        'city'                     => 'isixeko',
        'content'                  => 'umxholo',
        'country'                  => 'ilizwe',
        'created_at'               => 'yenziwe kwi',
        'creator'                  => 'umdali',
        'currency'                 => 'imali',
        'current_password'         => 'Iphasiwedi yangoku',
        'customer'                 => 'umthengi',
        'date'                     => 'umhla',
        'date_of_birth'            => 'umhla wokuzalwa',
        'day'                      => 'usuku',
        'deleted_at'               => 'icinywe ngo',
        'description'              => 'inkcazelo',
        'district'                 => 'isithili',
        'duration'                 => 'ubude bexesha',
        'email'                    => 'imeyile',
        'excerpt'                  => 'Isicatshulwa',
        'filter'                   => 'isihluzo',
        'first_name'               => 'igama lakho',
        'gender'                   => 'isini',
        'group'                    => 'iqela',
        'hour'                     => 'yure',
        'image'                    => 'umfanekiso',
        'is_subscribed'            => 'ubhalisiwe',
        'items'                    => 'izinto',
        'last_name'                => 'Ifani',
        'lesson'                   => 'isifundo',
        'line_address_1'           => 'idilesi yomgca 1',
        'line_address_2'           => 'idilesi yomgca 2',
        'message'                  => 'umyalezo',
        'middle_name'              => 'Igama eliphakathi',
        'minute'                   => 'mzuzu',
        'mobile'                   => 'mobile',
        'month'                    => 'inyanga',
        'name'                     => 'igama',
        'national_code'            => 'ikhowudi yesizwe',
        'number'                   => 'inani',
        'password'                 => 'inombolo yokuvula',
        'password_confirmation'    => 'ukuqinisekiswa kwegama lokugqitha',
        'phone'                    => 'ifowuni',
        'photo'                    => 'ifoto',
        'postal_code'              => 'Ikhowudi yePosi',
        'preview'                  => 'imboniso',
        'price'                    => 'ixabiso',
        'product_id'               => 'ID yemveliso',
        'product_uid'              => 'imveliso UID',
        'product_uuid'             => 'imveliso UUID',
        'promo_code'               => 'ikhowudi yokuthengisa',
        'province'                 => 'iphondo',
        'quantity'                 => 'ubungakanani',
        'recaptcha_response_field' => 'indawo yempendulo ye-recaptcha',
        'remember'                 => 'khumbula',
        'restored_at'              => 'ibuyiselwe kwi',
        'result_text_under_image'  => 'okubhaliweyo kwesiphumo phantsi komfanekiso',
        'role'                     => 'indima',
        'second'                   => 'Isibini',
        'sex'                      => 'ngesondo',
        'shipment'                 => 'ukuthunyelwa',
        'short_text'               => 'umbhalo omfutshane',
        'size'                     => 'ubukhulu',
        'state'                    => 'urhulumente',
        'street'                   => 'isitalato',
        'student'                  => 'umfundi',
        'subject'                  => 'umxholo',
        'teacher'                  => 'utitshala',
        'terms'                    => 'imigaqo',
        'test_description'         => 'inkcazo yovavanyo',
        'test_locale'              => 'uvavanyo lwendawo',
        'test_name'                => 'igama lovavanyo',
        'text'                     => 'umbhalo',
        'time'                     => 'ixesha',
        'title'                    => 'isihloko',
        'updated_at'               => 'ihlaziywe ngo',
        'user'                     => 'umsebenzisi',
        'username'                 => 'igama lomsebenzisi',
        'year'                     => 'unyaka',
    ],
];
