<?php

declare(strict_types=1);

return [
    'accepted'             => ':Attribute을(를) 동의해야 합니다.',
    'accepted_if'          => ':Attribute을(를) :other이(가) :value이면 동의해야 합니다.',
    'active_url'           => ':Attribute은(는) 유효한 URL이 아닙니다.',
    'after'                => ':Attribute은(는) :date 이후 날짜여야 합니다.',
    'after_or_equal'       => ':Attribute은(는) :date 이후 날짜이거나 같은 날짜여야 합니다.',
    'alpha'                => ':Attribute은(는) 문자만 포함할 수 있습니다.',
    'alpha_dash'           => ':Attribute은(는) 문자, 숫자, 대쉬(-), 밑줄(_)만 포함할 수 있습니다.',
    'alpha_num'            => ':Attribute은(는) 문자와 숫자만 포함할 수 있습니다.',
    'array'                => ':Attribute은(는) 배열이어야 합니다.',
    'ascii'                => ':Attribute은 1바이트 영숫자 문자와 기호만 포함해야 합니다.',
    'before'               => ':Attribute은(는) :date 이전 날짜여야 합니다.',
    'before_or_equal'      => ':Attribute은(는) :date 이전 날짜이거나 같은 날짜여야 합니다.',
    'between'              => [
        'array'   => ':Attribute의 항목 수는 :min에서 :max 개의 항목이 있어야 합니다.',
        'file'    => ':Attribute의 용량은 :min에서 :max 킬로바이트 사이여야 합니다.',
        'numeric' => ':Attribute의 값은 :min에서 :max 사이여야 합니다.',
        'string'  => ':Attribute의 길이는 :min에서 :max 문자 사이여야 합니다.',
    ],
    'boolean'              => ':Attribute은(는) true 또는 false 이어야 합니다.',
    'can'                  => ':Attribute 필드에 승인되지 않은 값이 포함되어 있습니다.',
    'confirmed'            => ':Attribute 확인 항목이 일치하지 않습니다.',
    'current_password'     => '패스워드가 일치하지 않습니다.',
    'date'                 => ':Attribute은(는) 유효한 날짜가 아닙니다.',
    'date_equals'          => ':Attribute은(는) :date과(와) 같은날짜여야합니다.',
    'date_format'          => ':Attribute이(가) :format 형식과 일치하지 않습니다.',
    'decimal'              => ':Attribute은 소수점 이하 :decimal자리여야 합니다.',
    'declined'             => ':Attribute은(는) 거부되어야 합니다.',
    'declined_if'          => ':Other이(가) :value일때 :attribute은(는) 거부되어야 합니다.',
    'different'            => ':Attribute와(과) :other은(는) 서로 달라야 합니다.',
    'digits'               => ':Attribute은(는) :digits 자리 숫자여야 합니다.',
    'digits_between'       => ':Attribute은(는) :min에서 :max 자리 사이여야 합니다.',
    'dimensions'           => ':Attribute은(는) 올바르지 않는 이미지 크기입니다.',
    'distinct'             => ':Attribute 필드에 중복된 값이 있습니다.',
    'doesnt_end_with'      => ':Attribute은 다음 중 하나로 끝날 수 없습니다: :values.',
    'doesnt_start_with'    => ':Attribute은 다음 중 하나로 시작할 수 없습니다: :values.',
    'email'                => ':Attribute은(는) 유효한 이메일 주소여야 합니다.',
    'ends_with'            => ':Attribute은(는) 다음 중 하나로 끝나야 합니다: :values.',
    'enum'                 => ':Attribute의 값이 잘못되었습니다.',
    'exists'               => ':Attribute이(가) 존재하지 않습니다.',
    'extensions'           => ':attribute 필드에는 다음 확장자 중 하나가 있어야 합니다. :values.',
    'file'                 => ':Attribute은(는) 파일이어야 합니다.',
    'filled'               => ':Attribute 필드는 값이 있어야 합니다.',
    'gt'                   => [
        'array'   => ':Attribute의 항목 수는 :value개 보다 많아야 합니다.',
        'file'    => ':Attribute의 용량은 :value킬로바이트보다 커야 합니다.',
        'numeric' => ':Attribute의 값은 :value보다 커야 합니다.',
        'string'  => ':Attribute의 길이는 :value보다 길어야 합니다.',
    ],
    'gte'                  => [
        'array'   => ':Attribute의 항목 수는 :value개 보다 같거나 많아야 합니다.',
        'file'    => ':Attribute의 용량은 :value킬로바이트보다 같거나 커야 합니다.',
        'numeric' => ':Attribute의 값은 :value보다 같거나 커야 합니다.',
        'string'  => ':Attribute의 길이는 :value보다 같거나 길어야 합니다.',
    ],
    'hex_color'            => ':attribute 필드는 유효한 16진수 색상이어야 합니다.',
    'image'                => ':Attribute은(는) 이미지여야 합니다.',
    'in'                   => '선택된 :attribute은(는) 올바르지 않습니다.',
    'in_array'             => ':Attribute 필드는 :other에 존재하지 않습니다.',
    'integer'              => ':Attribute은(는) 정수여야 합니다.',
    'ip'                   => ':Attribute은(는) 유효한 IP 주소여야 합니다.',
    'ipv4'                 => ':Attribute은(는) 유효한 IPv4 주소여야 합니다.',
    'ipv6'                 => ':Attribute은(는) 유효한 IPv6 주소여야 합니다.',
    'json'                 => ':Attribute은(는) JSON 문자열이어야 합니다.',
    'lowercase'            => ':Attribute은 소문자여야 합니다.',
    'lt'                   => [
        'array'   => ':Attribute의 항목 수는 :value개 보다 작아야 합니다.',
        'file'    => ':Attribute의 용량은 :value킬로바이트보다 작아야 합니다.',
        'numeric' => ':Attribute의 값은 :value보다 작아야 합니다.',
        'string'  => ':Attribute의 길이는 :value보다 짧아야 합니다.',
    ],
    'lte'                  => [
        'array'   => ':Attribute의 항목 수는 :value개 보다 같거나 작아야 합니다.',
        'file'    => ':Attribute의 용량은 :value킬로바이트보다 같거나 작아야 합니다.',
        'numeric' => ':Attribute의 값은 :value보다 같거나 작아야 합니다.',
        'string'  => ':Attribute의 길이는 :value보다 같거나 짧아야 합니다.',
    ],
    'mac_address'          => ':Attribute은(는) 올바른 MAC 주소가 아닙니다.',
    'max'                  => [
        'array'   => ':Attribute은(는) :max개보다 많을 수 없습니다.',
        'file'    => ':Attribute은(는) :max킬로바이트보다 클 수 없습니다.',
        'numeric' => ':Attribute은(는) :max보다 클 수 없습니다.',
        'string'  => ':Attribute은(는) :max자보다 클 수 없습니다.',
    ],
    'max_digits'           => ':Attribute은 :max자리를 넘지 않아야 합니다.',
    'mimes'                => ':Attribute은(는) 다음의 파일 형식이어야 합니다: :values.',
    'mimetypes'            => ':Attribute은(는) 다음의 파일 형식이어야 합니다: :values.',
    'min'                  => [
        'array'   => ':Attribute은(는) 최소한 :min개의 항목이 있어야 합니다.',
        'file'    => ':Attribute은(는) 최소한 :min킬로바이트이어야 합니다.',
        'numeric' => ':Attribute은(는) 최소한 :min이어야 합니다.',
        'string'  => ':Attribute은(는) 최소한 :min자이어야 합니다.',
    ],
    'min_digits'           => ':Attribute은 :min자리 이상이어야 합니다.',
    'missing'              => ':Attribute 필드가 없어야 합니다.',
    'missing_if'           => ':Other이 :value일 때 :attribute 필드는 누락되어야 합니다.',
    'missing_unless'       => ':Other이 :value이 아닌 경우 :attribute 필드는 누락되어야 합니다.',
    'missing_with'         => ':Values이 있는 경우 :attribute 필드는 누락되어야 합니다.',
    'missing_with_all'     => ':Values이 있는 경우 :attribute 필드는 누락되어야 합니다.',
    'multiple_of'          => ':Attribute 는 :value 의 배수여야 합니다.',
    'not_in'               => '선택된 :attribute이(가) 올바르지 않습니다.',
    'not_regex'            => ':Attribute의 형식이 올바르지 않습니다.',
    'numeric'              => ':Attribute은(는) 숫자여야 합니다.',
    'password'             => [
        'letters'       => ':Attribute은 적어도 하나의 문자를 포함해야 합니다.',
        'mixed'         => ':Attribute은 적어도 하나의 대문자와 하나의 소문자를 포함해야 합니다.',
        'numbers'       => ':Attribute은 적어도 하나의 숫자를 포함해야 합니다.',
        'symbols'       => ':Attribute은 적어도 하나의 기호를 포함해야 합니다.',
        'uncompromised' => '주어진 :attribute이 데이터 유출로 나타났습니다. 다른 :attribute개를 선택하세요.',
    ],
    'present'              => ':Attribute 필드가 있어야 합니다.',
    'present_if'           => ':other이 :value인 경우 :attribute 필드가 있어야 합니다.',
    'present_unless'       => ':other이 :value이 아닌 이상 :attribute 필드가 있어야 합니다.',
    'present_with'         => ':values이 있으면 :attribute 필드도 있어야 합니다.',
    'present_with_all'     => ':values이 있을 때 :attribute 필드도 있어야 합니다.',
    'prohibited'           => ':Attribute (은)는 금지되어 있습니다.',
    'prohibited_if'        => ':Attribute (은)는 :other 이(가) :value 인 경우 금지되어 있습니다.',
    'prohibited_unless'    => ':Attribute (은)는 :other 이(가) :value 이(가) 아닌 경우 금지되어 있습니다.',
    'prohibits'            => ':Attribute (은)는 :other 을(를) 금지합니다.',
    'regex'                => ':Attribute 형식이 올바르지 않습니다.',
    'required'             => ':Attribute 필드는 필수입니다.',
    'required_array_keys'  => ':Attribute 필드는 :values에 대한 항목을 포함해야 합니다.',
    'required_if'          => ':Other이(가) :value 일 때 :attribute 필드는 필수입니다.',
    'required_if_accepted' => ':Other이 승인되면 :attribute 필드가 필요합니다.',
    'required_unless'      => ':Other이(가) :values에 없다면 :attribute 필드는 필수입니다.',
    'required_with'        => ':Values이(가) 있는 경우 :attribute 필드는 필수입니다.',
    'required_with_all'    => ':Values이(가) 모두 있는 경우 :attribute 필드는 필수입니다.',
    'required_without'     => ':Values이(가) 없는 경우 :attribute 필드는 필수입니다.',
    'required_without_all' => ':Values이(가) 모두 없는 경우 :attribute 필드는 필수입니다.',
    'same'                 => ':Attribute와(과) :other은(는) 일치해야 합니다.',
    'size'                 => [
        'array'   => ':Attribute은(는) :size개의 항목을 포함해야 합니다.',
        'file'    => ':Attribute은(는) :size킬로바이트여야 합니다.',
        'numeric' => ':Attribute은(는) :size (이)여야 합니다.',
        'string'  => ':Attribute은(는) :size자여야 합니다.',
    ],
    'starts_with'          => ':Attribute은(는) :values 중 하나로 시작해야 합니다.',
    'string'               => ':Attribute은(는) 문자열이어야 합니다.',
    'timezone'             => ':Attribute은(는) 올바른 시간대 이어야 합니다.',
    'ulid'                 => ':Attribute은 유효한 ULID여야 합니다.',
    'unique'               => ':Attribute은(는) 이미 사용 중입니다.',
    'uploaded'             => ':Attribute을(를) 업로드하지 못했습니다.',
    'uppercase'            => ':Attribute은 대문자여야 합니다.',
    'url'                  => ':Attribute은(는) 형식은 올바르지 않습니다.',
    'uuid'                 => ':Attribute은(는) 유효한UUID여야합니다.',
    'attributes'           => [
        'address'                  => '주소',
        'affiliate_url'            => '제휴 URL',
        'age'                      => '나이',
        'amount'                   => '양',
        'announcement'             => '발표',
        'area'                     => '지역',
        'audience_prize'           => '관객상',
        'audience_winner'          => 'audience winner',
        'available'                => '사용 가능',
        'birthday'                 => '생신',
        'body'                     => '몸',
        'city'                     => '도시',
        'company'                  => 'company',
        'compilation'              => '편집',
        'concept'                  => '개념',
        'conditions'               => '정황',
        'content'                  => '내용',
        'contest'                  => 'contest',
        'country'                  => '나라',
        'cover'                    => '씌우다',
        'created_at'               => '에 생성됨',
        'creator'                  => '창조자',
        'currency'                 => '통화',
        'current_password'         => '현재 비밀번호',
        'customer'                 => '고객',
        'date'                     => '날짜',
        'date_of_birth'            => '생일',
        'dates'                    => '날짜',
        'day'                      => '일',
        'deleted_at'               => '에서 삭제됨',
        'description'              => '상세설명',
        'display_type'             => '디스플레이 유형',
        'district'                 => '구역',
        'duration'                 => '지속',
        'email'                    => '이메일',
        'excerpt'                  => '발췌',
        'filter'                   => '필터',
        'finished_at'              => '에 끝났다',
        'first_name'               => '이름',
        'gender'                   => '성별',
        'grand_prize'              => '큰 상',
        'group'                    => '그룹',
        'hour'                     => '시',
        'image'                    => '영상',
        'image_desktop'            => '데스크톱 이미지',
        'image_main'               => '메인 이미지',
        'image_mobile'             => '모바일 이미지',
        'images'                   => '이미지',
        'is_audience_winner'       => '청중의 승자인가',
        'is_hidden'                => '숨겨져 있다',
        'is_subscribed'            => '구독중입니다',
        'is_visible'               => '눈에 보인다',
        'is_winner'                => '승자입니다',
        'items'                    => '아이템',
        'key'                      => '열쇠',
        'last_name'                => '성',
        'lesson'                   => '수업',
        'line_address_1'           => '회선 주소 1',
        'line_address_2'           => '회선 주소 2',
        'login'                    => '로그인',
        'message'                  => '메시지',
        'middle_name'              => '중간 이름',
        'minute'                   => '분',
        'mobile'                   => '모바일',
        'month'                    => '월',
        'name'                     => '이름',
        'national_code'            => '국가 코드',
        'number'                   => '숫자',
        'password'                 => '비밀번호',
        'password_confirmation'    => '비밀번호 확인',
        'phone'                    => '전화번호',
        'photo'                    => '사진',
        'portfolio'                => '포트폴리오',
        'postal_code'              => '우편 번호',
        'preview'                  => '시사',
        'price'                    => '가격',
        'product_id'               => '제품 ID',
        'product_uid'              => '제품 UID',
        'product_uuid'             => '제품 UUID',
        'promo_code'               => '프로모션 코드',
        'province'                 => '주',
        'quantity'                 => '수량',
        'reason'                   => '이유',
        'recaptcha_response_field' => 'recaptcha 응답 필드',
        'referee'                  => '심판',
        'referees'                 => '심판',
        'reject_reason'            => '거부 이유',
        'remember'                 => '기억하다',
        'restored_at'              => '복원',
        'result_text_under_image'  => '이미지 아래의 결과 텍스트',
        'role'                     => '규칙',
        'rule'                     => '규칙',
        'rules'                    => '규칙',
        'second'                   => '초',
        'sex'                      => '성별',
        'shipment'                 => '선적',
        'short_text'               => '짧은 텍스트',
        'size'                     => '크기',
        'skills'                   => '기술',
        'slug'                     => '강타',
        'specialization'           => '전문화',
        'started_at'               => '시작 시간',
        'state'                    => '상태',
        'status'                   => '상태',
        'street'                   => '거리',
        'student'                  => '학생',
        'subject'                  => '주제',
        'tag'                      => '꼬리표',
        'tags'                     => '태그',
        'teacher'                  => '선생님',
        'terms'                    => '약관',
        'test_description'         => '테스트 설명',
        'test_locale'              => '테스트 로케일',
        'test_name'                => '테스트 이름',
        'text'                     => '텍스트',
        'time'                     => '시간',
        'title'                    => '제목',
        'type'                     => '유형',
        'updated_at'               => '에 업데이트됨',
        'user'                     => '사용자',
        'username'                 => '유저네임',
        'value'                    => '값',
        'winner'                   => 'winner',
        'work'                     => 'work',
        'year'                     => '년',
    ],
];
