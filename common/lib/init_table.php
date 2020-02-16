<?php
define('ADMIN_ID', 'admin');
define('ADMIN_PW', '123456');

function insert_init_data($conn, $table_name){
    $is_empty = false; // 테이블이 비어 있는 지 유무
    $sql = "SELECT * from $table_name";
    $result = mysqli_query($conn, $sql) or die('select from table error: '.mysqli_error($conn));

    $records = mysqli_num_rows($result);

    if(empty($records) ){
      $is_empty = true;
    }

    // 테이블이 비어 있을 경우, 초기값을 넣어줌
    if($is_empty){
        switch($table_name){
            // 모든 테이블에 대한 초기값
            case 'admin' :
                $sql = "insert into `admin` values ('".ADMIN_ID."', '".ADMIN_PW."')";
                break;
                
            case 'person' :
                $sql = "insert into `person` values ('4jo4jo', '123123', '김사조', '1968-01-01', 'example@test.com', '010-1234-5678', '여', '51354', '서울 성동구 행당동 286-16', '서울 성동구 무학봉28길 11'),
                    ('ksj123', '123123', '김소진', '1959-07-01', 'example@test.com', '010-1124-4433', '여', '51354', '서울 성동구 행당동 286-16', '서울 성동구 무학봉28길 11'),
                    ('lcm123', '123123', '임채민', '1959-06-01', 'example@test.com', '010-2354-9785', '남', '51354', '서울 성동구 행당동 286-16', '서울 성동구 무학봉28길 11'),
                    ('nch123', '123123', '남채현', '1959-05-01', 'example@test.com', '010-4135-4233', '여', '51354', '서울 성동구 행당동 286-16', '서울 성동구 무학봉28길 11'),
                    ('lkh123', '123123', '이강현', '1959-05-01', 'example@test.com', '010-6244-4433', '남', '51354', '서울 성동구 행당동 286-16', '서울 성동구 무학봉28길 11'),
                    ('lts123', '123123', '이태성', '1959-02-01', 'example@test.com', '010-1531-3576', '남', '51354', '서울 성동구 행당동 286-16', '서울 성동구 무학봉28길 11'),

                    ('test12', '123123', '김테스트', '1959-01-01', 'example@test.com', '010-1124-4433', '여', '51354', '서울 성동구 행당동 286-16', '서울 성동구 무학봉28길 11'),
                    ('fruit', '123123', '김과일', '1968-07-01', 'example@test.com', '010-9928-8894', '여', '24243', '서울 성동구 행당동 286-16', '서울 성동구 무학봉28길 11'),
                    ('mnmnm', '123123', '김엠앤', '1967-08-01', 'example@test.com', '010-1234-5253', '남', '14243', '서울 성동구 행당동 286-16', '서울 성동구 무학봉28길 11'),
                    ('kamill', '123123', '김카밀', '1966-09-01', 'example@test.com', '010-9933-5678', '남', '24243', '서울 성동구 행당동 286-16', '서울 성동구 무학봉28길 11')";
                break;

            case 'corporate' :
                $sql = "insert into `corporate` values ('chamchi', '123123', '사조참치', '제조업', '김소진', '1234512345', '서울 성동구 무학로2길 54', '4jo@company.com', '3'),
                    ('chocolate1', '123123', '가나콜릿', '제조업', '김소진', '3424343242', '서울 성동구 무학로2길 54', 'chocolate1@company.com', '3'),
                    ('celestial', '123123', '허벌티', '제조업', '김소진', '3012765544', '서울 성동구 무학로2길 54', 'celestial@company.com', '3'),
                    ('starbucks', '123123', '스타벅스', '숙박/음식업점', '김소진', '9955334400', '서울 성동구 무학로2길 54', 'starbucks@company.com', '3'),
                    ('mac123', '123123', '맥도날드', '숙박/음식업점', '김소진', '3349955003', '서울 성동구 무학로2길 54', 'mac123@company.com', '3')";
                break;

            case 'recruitment' :
                $sql = "insert into `recruitment` values (null, '포크 생산라인 근무자', '테스트 공고입니다. 성실한 분들 찾아요', '김채용', '010-9999-8888', 'kim@chae.com', 'www.4jo.com', '생산/제조/단순노무 생산/제조', '3', '무관', '무관', '시급 12000원', '시간제', '2020-01-22', '2020-02-22','서울 성동구 무학로2길 54 신방빌딩 4,5층', null, null, now()),
                    (null, '참치 생산라인 근무자', '테스트 공고입니다. 성실한 분들 찾아요', '김채용', '010-9999-8888', 'kim@chae.com', 'www.4jo.com', '생산/제조/단순노무 생산/제조', '3', '무관', '무관', '시급 12000원', '시간제', '2020-01-22', '2020-02-22', '서울 성동구 무학로2길 54 신방빌딩 4,5층', null, null, now()),
                    (null, '경로식당 식자재 생산', '테스트 공고입니다. 성실한 분들 찾아요', '김채용', '010-9999-8888', 'kim@chae.com', 'www.4jo.com', '생산/제조/단순노무 생산/제조', '3', '무관', '무관', '월급 330000원', '시간제', '2020-01-22', '2020-02-22', '서울 성동구 무학로2길 54 신방빌딩 4,5층', null, null, now()),
                    (null, '실버카페 물류사업단', '테스트 공고입니다. 성실한 분들 찾아요', '김채용', '010-9999-8888', 'kim@chae.com', 'www.4jo.com', '생산/제조/단순노무 생산/제조', '3', '무관', '무관', '시급 12000원', '시간제', '2020-01-22', '2020-02-22', '서울 성동구 무학로2길 54 신방빌딩 4,5층', null, null, now()),
                    (null, '커피 원두 생산', '테스트 공고입니다. 성실한 분들 찾아요', '김채용', '010-9999-8888', 'kim@chae.com', 'www.4jo.com', '생산/제조/단순노무 생산/제조', '3', '무관', '무관', '월급 400000원', '시간제', '2020-01-22', '2020-02-22', '서울 성동구 무학로2길 54 신방빌딩 4,5층', null, null, now()),
                    (null, '누룽지 제조', '테스트 공고입니다. 성실한 분들 찾아요', '김채용', '010-9999-8888', 'kim@chae.com', 'www.4jo.com', '생산/제조/단순노무 생산/제조', '3', '무관', '무관', '시급 12000원', '시간제', '2020-01-22', '2020-02-22', '서울 성동구 무학로2길 54 신방빌딩 4,5층', null, null, now()),
                    (null, '포크 생산라인 근무자', '테스트 공고입니다. 성실한 분들 찾아요', '김채용', '010-9999-8888', 'kim@chae.com', 'www.4jo.com', '생산/제조/단순노무 생산/제조', '3', '무관', '무관', '시급 12000원', '시간제', '2020-01-22', '2020-02-22', '서울 성동구 무학로2길 54 신방빌딩 4,5층', null, null, now()),
                    (null, '참치 생산라인 근무자', '테스트 공고입니다. 성실한 분들 찾아요', '김채용', '010-9999-8888', 'kim@chae.com', 'www.4jo.com', '생산/제조/단순노무 생산/제조', '3', '무관', '무관', '시급 12000원', '시간제', '2020-01-22', '2020-02-22', '서울 성동구 무학로2길 54 신방빌딩 4,5층', null, null, now()),
                    (null, '경로식당 식자재 생산', '테스트 공고입니다. 성실한 분들 찾아요', '김채용', '010-9999-8888', 'kim@chae.com', 'www.4jo.com', '생산/제조/단순노무 생산/제조', '3', '무관', '무관', '월급 330000원', '시간제', '2020-01-22', '2020-02-22', '서울 성동구 무학로2길 54 신방빌딩 4,5층', null, null, now()),
                    (null, '실버카페 물류사업단', '테스트 공고입니다. 성실한 분들 찾아요', '김채용', '010-9999-8888', 'kim@chae.com', 'www.4jo.com', '생산/제조/단순노무 생산/제조', '3', '무관', '무관', '시급 12000원', '시간제', '2020-01-22', '2020-02-22', '서울 성동구 무학로2길 54 신방빌딩 4,5층', null, null, now()),
                    (null, '커피 원두 생산', '테스트 공고입니다. 성실한 분들 찾아요', '김채용', '010-9999-8888', 'kim@chae.com', 'www.4jo.com', '생산/제조/단순노무 생산/제조', '3', '무관', '무관', '월급 400000원', '시간제', '2020-01-22', '2020-02-22', '서울 성동구 무학로2길 54 신방빌딩 4,5층', null, null, now()),
                    (null, '누룽지 제조', '테스트 공고입니다. 성실한 분들 찾아요', '김채용', '010-9999-8888', 'kim@chae.com', 'www.4jo.com', '생산/제조/단순노무 생산/제조', '3', '무관', '무관', '시급 12000원', '시간제', '2020-01-22', '2020-02-22', '서울 성동구 무학로2길 54 신방빌딩 4,5층', null, null, now()),
                    (null, '포크 생산라인 근무자', '테스트 공고입니다. 성실한 분들 찾아요', '김채용', '010-9999-8888', 'kim@chae.com', 'www.4jo.com', '생산/제조/단순노무 생산/제조', '3', '무관', '무관', '시급 12000원', '시간제', '2020-01-22', '2020-02-22', '서울 성동구 무학로2길 54 신방빌딩 4,5층', null, null, now()),
                    (null, '참치 생산라인 근무자', '테스트 공고입니다. 성실한 분들 찾아요', '김채용', '010-9999-8888', 'kim@chae.com', 'www.4jo.com', '생산/제조/단순노무 생산/제조', '3', '무관', '무관', '시급 12000원', '시간제', '2020-01-22', '2020-02-22', '서울 성동구 무학로2길 54 신방빌딩 4,5층', null, null, now()),
                    (null, '경로식당 식자재 생산', '테스트 공고입니다. 성실한 분들 찾아요', '김채용', '010-9999-8888', 'kim@chae.com', 'www.4jo.com', '생산/제조/단순노무 생산/제조', '3', '무관', '무관', '월급 330000원', '시간제', '2020-01-22', '2020-02-22', '서울 성동구 무학로2길 54 신방빌딩 4,5층', null, null, now()),
                    (null, '실버카페 물류사업단', '테스트 공고입니다. 성실한 분들 찾아요', '김채용', '010-9999-8888', 'kim@chae.com', 'www.4jo.com', '생산/제조/단순노무 생산/제조', '3', '무관', '무관', '시급 12000원', '시간제', '2020-01-22', '2020-02-22', '서울 성동구 무학로2길 54 신방빌딩 4,5층', null, null, now()),
                    (null, '커피 원두 생산', '테스트 공고입니다. 성실한 분들 찾아요', '김채용', '010-9999-8888', 'kim@chae.com', 'www.4jo.com', '생산/제조/단순노무 생산/제조', '3', '무관', '무관', '월급 400000원', '시간제', '2020-01-22', '2020-02-22', '서울 성동구 무학로2길 54 신방빌딩 4,5층', null, null, now()),
                    (null, '누룽지 제조', '테스트 공고입니다. 성실한 분들 찾아요', '김채용', '010-9999-8888', 'kim@chae.com', 'www.4jo.com', '생산/제조/단순노무 생산/제조', '3', '무관', '무관', '시급 12000원', '시간제', '2020-01-22', '2020-02-22', '서울 성동구 무학로2길 54 신방빌딩 4,5층', null, null, now()),

                    (null, '포크 포장', '테스트 공고입니다. 성실한 분들 찾아요', '김채용', '010-9999-8888', 'kim@chae.com', 'www.4jo.com', '생산/제조/단순노무 조립/포장', '3', '무관', '무관', '시급 12000원', '시간제', '2020-01-22', '2020-02-22', '서울 성동구 무학로2길 54 신방빌딩 4,5층', null, null, now()),
                    (null, '참치 포장', '테스트 공고입니다. 성실한 분들 찾아요', '김채용', '010-9999-8888', 'kim@chae.com', 'www.4jo.com', '생산/제조/단순노무 조립/포장', '3', '무관', '무관', '시급 12000원', '시간제', '2020-01-22', '2020-02-22', '서울 성동구 무학로2길 54 신방빌딩 4,5층', null, null, now()),
                    (null, '식자재 포장', '테스트 공고입니다. 성실한 분들 찾아요', '김채용', '010-9999-8888', 'kim@chae.com', 'www.4jo.com', '생산/제조/단순노무 조립/포장', '3', '무관', '무관', '월급 330000원', '시간제', '2020-01-22', '2020-02-22', '서울 성동구 무학로2길 54 신방빌딩 4,5층', null, null, now()),
                    (null, '간단한 박스 포장 업무', '테스트 공고입니다. 성실한 분들 찾아요', '김채용', '010-9999-8888', 'kim@chae.com', 'www.4jo.com', '생산/제조/단순노무 조립/포장', '3', '무관', '무관', '시급 12000원', '시간제', '2020-01-22', '2020-02-22', '서울 성동구 무학로2길 54 신방빌딩 4,5층', null, null, now()),
                    (null, '커피 원두 포장', '테스트 공고입니다. 성실한 분들 찾아요', '김채용', '010-9999-8888', 'kim@chae.com', 'www.4jo.com', '생산/제조/단순노무 조립/포장', '3', '무관', '무관', '월급 400000원', '시간제', '2020-01-22', '2020-02-22', '서울 성동구 무학로2길 54 신방빌딩 4,5층', null, null, now()),
                    (null, '누룽지 포장', '테스트 공고입니다. 성실한 분들 찾아요', '김채용', '010-9999-8888', 'kim@chae.com', 'www.4jo.com', '생산/제조/단순노무 조립/포장', '3', '무관', '무관', '시급 12000원', '시간제', '2020-01-22', '2020-02-22', '서울 성동구 무학로2길 54 신방빌딩 4,5층', null, null, now()),
                    (null, '식자재 포장', '테스트 공고입니다. 성실한 분들 찾아요', '김채용', '010-9999-8888', 'kim@chae.com', 'www.4jo.com', '생산/제조/단순노무 조립/포장', '3', '무관', '무관', '월급 330000원', '시간제', '2020-01-22', '2020-02-22', '서울 성동구 무학로2길 54 신방빌딩 4,5층', null, null, now()),
                    (null, '간단한 박스 포장 업무', '테스트 공고입니다. 성실한 분들 찾아요', '김채용', '010-9999-8888', 'kim@chae.com', 'www.4jo.com', '생산/제조/단순노무 조립/포장', '3', '무관', '무관', '시급 12000원', '시간제', '2020-01-22', '2020-02-22', '서울 성동구 무학로2길 54 신방빌딩 4,5층', null, null, now()),
                    (null, '커피 원두 포장', '테스트 공고입니다. 성실한 분들 찾아요', '김채용', '010-9999-8888', 'kim@chae.com', 'www.4jo.com', '생산/제조/단순노무 조립/포장', '3', '무관', '무관', '월급 400000원', '시간제', '2020-01-22', '2020-02-22', '서울 성동구 무학로2길 54 신방빌딩 4,5층', null, null, now()),
                    (null, '누룽지 포장', '테스트 공고입니다. 성실한 분들 찾아요', '김채용', '010-9999-8888', 'kim@chae.com', 'www.4jo.com', '생산/제조/단순노무 조립/포장', '3', '무관', '무관', '시급 12000원', '시간제', '2020-01-22', '2020-02-22', '서울 성동구 무학로2길 54 신방빌딩 4,5층', null, null, now()),

                    (null, '건물 경비원 구인', '테스트 공고입니다. 성실한 분들 찾아요', '김채용', '010-9999-8888', 'kim@chae.com', 'www.4jo.com', '경비/시설관리 경비원', '3', '무관', '무관', '시급 9000원', '시간제', '2020-01-22', '2020-02-22', '경기 안양시 동안구 엘에스로91번길 46-18', null, null, now()),
                    (null, '아파트 경비원 구인', '테스트 공고입니다. 성실한 분들 찾아요', '김채용', '010-9999-8888', 'kim@chae.com', 'www.4jo.com', '경비/시설관리 경비원', '3', '무관', '무관', '시급 8900원', '시간제', '2020-01-22', '2020-02-22', '경기 안양시 동안구 엘에스로91번길 46-18', null, null, now()),
                    (null, '경비 인력 모집', '테스트 공고입니다. 성실한 분들 찾아요', '김채용', '010-9999-8888', 'kim@chae.com', 'www.4jo.com', '경비/시설관리 경비원', '3', '무관', '무관', '시급 12000원', '시간제', '2020-01-22', '2020-02-22', '경기 안양시 동안구 엘에스로91번길 46-18', null, null, now()),
                    (null, '공원 미화원', '테스트 공고입니다. 성실한 분들 찾아요', '김채용', '010-9999-8888', 'kim@chae.com', 'www.4jo.com', '청소/미화 청소원', '3', '무관', '무관', '시급 12000원', '시간제', '2020-01-22', '2020-02-22', '경기 안양시 동안구 엘에스로91번길 46-18', null, null, now()),
                    (null, '여행자거리 미화원', '테스트 공고입니다. 성실한 분들 찾아요', '김채용', '010-9999-8888', 'kim@chae.com', 'www.4jo.com', '청소/미화 청소원', '3', '무관', '무관', '시급 12000원', '시간제', '2020-01-22', '2020-02-22', '경기 안양시 동안구 엘에스로91번길 46-18', null, null, now()),
                    (null, '건물 경비원 구인', '테스트 공고입니다. 성실한 분들 찾아요', '김채용', '010-9999-8888', 'kim@chae.com', 'www.4jo.com', '경비/시설관리 경비원', '3', '무관', '무관', '시급 9000원', '시간제', '2020-01-22', '2020-02-22', '경기 안양시 동안구 엘에스로91번길 46-18', null, null, now()),
                    (null, '아파트 경비원 구인', '테스트 공고입니다. 성실한 분들 찾아요', '김채용', '010-9999-8888', 'kim@chae.com', 'www.4jo.com', '경비/시설관리 경비원', '3', '무관', '무관', '시급 8900원', '시간제', '2020-01-22', '2020-02-22', '경기 안양시 동안구 엘에스로91번길 46-18', null, null, now()),
                    (null, '경비 인력 모집', '테스트 공고입니다. 성실한 분들 찾아요', '김채용', '010-9999-8888', 'kim@chae.com', 'www.4jo.com', '경비/시설관리 경비원', '3', '무관', '무관', '시급 12000원', '시간제', '2020-01-22', '2020-02-22', '경기 안양시 동안구 엘에스로91번길 46-18', null, null, now()),
                    (null, '공원 미화원', '테스트 공고입니다. 성실한 분들 찾아요', '김채용', '010-9999-8888', 'kim@chae.com', 'www.4jo.com', '청소/미화 청소원', '3', '무관', '무관', '시급 12000원', '시간제', '2020-01-22', '2020-02-22', '경기 안양시 동안구 엘에스로91번길 46-18', null, null, now());
                ";
                break;

            case 'apply' :
                $sql = "insert into `apply` values (null, '기본 이력서', '1', '4jo4jo', now())";
                break;

            case 'favorite' :
                $sql = "insert into `favorite` values (null, '1', '4jo4jo')";
                break;

            case 'notice' :
                $sql = "insert into `notice` values (null, '홈페이지 오픈', '많이 이용해주세요', null, null, null, 0, now())";
                break;

            case 'notification' :
                $sql = "insert into notification values (null, '홈페이지를 새롭게 오픈하였습니다','테스트용 알람입니다', now(), 0, '4jo4jo')";
                break;

            case 'recruit_plan' :
                $sql = "insert into `recruit_plan` values (null, 'basic plan', '채용공고 10개', '49900')";
                break;
                
            case 'qna' :
                $sql = "insert into `qna` values (null, 0, 0, 0, '4jo4jo', '김사조', '질문 있어요', '질문 없어요', 0, now());";
                break;
            
            case 'purchase' :
                $sql = "insert into `purchase` values (null, now(), 'celestial', '1', 'basic plan', '49900', '카카오페이')";
                break;

            case 'resume' :
                $sql = "INSERT INTO `resume` VALUES (null, 0, '4jo4jo', '김사조', 'example@test.com', '서울 성동구 행당동 286-16', '여', '1968-01-01', '010-1234-5678', '기본 이력서', '안녕하세요? 성실하면 김사조입니다.', 
                null, null, null, null, null, now());";
                break;
            
            case 'address' :
                $sql = "
                insert into `address` values (null, '서울', '서울 전체')
                ,(null, '서울', '강남구')
                ,(null, '서울', '강동구')
                ,(null, '서울', '강북구')
                ,(null, '서울', '강서구')
                ,(null, '서울', '관악구')
                ,(null, '서울', '노원구')
                ,(null, '서울', '도봉구')
                ,(null, '서울', '동대문구')
                ,(null, '서울', '동작구')
                ,(null, '서울', '서대문구')
                ,(null, '서울', '서초구')
                ,(null, '서울', '마포구')
                ,(null, '서울', '종로구')
                ,(null, '서울', '성동구')
                
                ,(null, '서울', '성북구')
                ,(null, '강원', '강릉시')
                ,(null, '서울', '송파구')
                ,(null, '강원', '고성군')
                ,(null, '서울', '양천구')
                ,(null, '강원', '삼척시')
                ,(null, '서울', '영등포구')
                ,(null, '강원', '양구군')
                ,(null, '서울', '용산구')
                ,(null, '강원', '원주시')
                ,(null, '서울', '은평구')
                ,(null, '강원', '인제군')
                ,(null, '서울', '중랑구')
                ,(null, '강원', '철원군')
                ,(null, '강원', '강원 전체')
                ,(null, '강원', '태백시')
                ,(null, '강원', '홍천군')
                ,(null, '강원', '화천군')
                ,(null, '강원', '동해시')
                
                ,(null, '강원', '속초시')
                ,(null, '경기', '가평군')
                ,(null, '강원', '양양군')
                ,(null, '경기', '고양시 덕양구')
                ,(null, '강원', '영월군')
                ,(null, '경기', '고양시 일산서구')
                ,(null, '강원', '정선군')
                ,(null, '경기', '광명시')
                ,(null, '강원', '춘천시')
                ,(null, '경기', '구리시')
                ,(null, '강원', '평창군')
                ,(null, '경기', '김포시')
                ,(null, '강원', '횡성군')
                ,(null, '경기', '동두천시')
                ,(null, '경기', '경기 전체')
                ,(null, '경기', '부천시 소사구')
                ,(null, '경기', '고양시')
                ,(null, '경기', '부천시 원미구')
                ,(null, '경기', '고양시 일산동구')
                ,(null, '경기', '성남시 분당구')
                ,(null, '경기', '과천시')
                ,(null, '경기', '광주시')
                ,(null, '경기', '군포시')
                ,(null, '경기', '남양주시')
                ,(null, '경기', '부천시')
                ,(null, '경기', '부천시 오정구')
                ,(null, '경기', '성남시')
                ,(null, '경기', '성남시 수정구')
                ,(null, '경기', '성남시 중원구')
                ,(null, '경기', '수원시')
                ,(null, '경기', '수원시 권선구')
                ,(null, '경기', '수원시 영통구')
                ,(null, '경기', '수원시 장안구')
                ,(null, '경기', '수원시 팔달구')
                ,(null, '경기', '시흥시')
                ,(null, '경기', '안산시')
                ,(null, '경기', '안산시 단원구')
                ,(null, '경기', '안산시 상록구')
                ,(null, '경기', '안성시')
                ,(null, '경기', '안양시')
                ,(null, '경기', '안양시 동안구')
                ,(null, '경기', '안양시 만안구')
                ,(null, '경기', '양주시')
                ,(null, '경기', '양평군')
                ,(null, '경기', '여주시')
                ,(null, '경기', '연천군')
                ,(null, '경기', '오산시')
                ,(null, '경기', '용인시')
                ,(null, '경기', '용인시 기흥구')
                ,(null, '경기', '용인시 수지구')
                ,(null, '경기', '용인시 처인구')
                ,(null, '경기', '의왕시')
                ,(null, '경기', '의정부시')
                ,(null, '경기', '이천시')
                ,(null, '경기', '파주시')
                ,(null, '경기', '평택시')
                ,(null, '경기', '포천시')
                ,(null, '경기', '하남시')
                ,(null, '경기', '화성시')
            
                ,(null, '경남', '경남 전체')
                ,(null, '경남', '거제시')
                ,(null, '경남', '거창군')
                ,(null, '경남', '고성군')
                ,(null, '경남', '김해시')
                ,(null, '경남', '남해군')
                ,(null, '경남', '밀양시')
                ,(null, '경남', '사천시')
                ,(null, '경남', '산청군')
                ,(null, '경남', '양산시')
                ,(null, '경남', '의령군')
                ,(null, '경남', '진주시')
                ,(null, '경남', '창녕군')
                ,(null, '경남', '창원시')
                ,(null, '경남', '창원시 마산합포구')
                ,(null, '경남', '창원시 마산회원구')
                ,(null, '경남', '창원시 성산구')
                ,(null, '경남', '창원시 의창구')
                ,(null, '경남', '창원시 진해구')
                ,(null, '경남', '통영시')
                ,(null, '경남', '하동군')
                ,(null, '경남', '함안군')
                ,(null, '경남', '함양군')
                ,(null, '경남', '합천군')
            
                ,(null, '경북', '경북 전체')
                ,(null, '경북', '경산시')
                ,(null, '경북', '경주시')
                ,(null, '경북', '고령군')
                ,(null, '경북', '구미시')
                ,(null, '경북', '군위군')
                ,(null, '경북', '김천시')
                ,(null, '경북', '문경시')
                ,(null, '경북', '봉화군')
                ,(null, '경북', '상주시')
                ,(null, '경북', '성주군')
                ,(null, '경북', '안동시')
                ,(null, '경북', '영덕군')
                ,(null, '경북', '영양군')
                ,(null, '경북', '영주시')
                ,(null, '경북', '영천시')
                ,(null, '경북', '예천군')
                ,(null, '경북', '울릉군')
                ,(null, '경북', '울진군')
                ,(null, '경북', '의성군')
                ,(null, '경북', '청도군')
                ,(null, '경북', '청송군')
                ,(null, '경북', '칠곡군')
                ,(null, '경북', '포항시')
                ,(null, '경북', '포항시 남구')
                ,(null, '경북', '포항시 북구')
            
                ,(null, '광주', '광주 전체')
                ,(null, '광주', '광산구')
                ,(null, '광주', '남구')
                ,(null, '광주', '동구')
                ,(null, '광주', '북구')
                ,(null, '광주', '서구')
            
                ,(null, '대구', '대구 전체')
                ,(null, '대구', '남구')
                ,(null, '대구', '달서구')
                ,(null, '대구', '달성군')
                ,(null, '대구', '동구')
                ,(null, '대구', '북구')
                ,(null, '대구', '서구')
                ,(null, '대구', '수성구')
                ,(null, '대구', '중구')
            
                ,(null, '대전', '대전 전체')
                ,(null, '대전', '대덕구')
                ,(null, '대전', '동구')
                ,(null, '대전', '서구')
                ,(null, '대전', '유성구')
                ,(null, '대전', '중구')
            
                ,(null, '부산', '부산 전체')
                ,(null, '부산', '강서구')
                ,(null, '부산', '금정구')
                ,(null, '부산', '기장군')
                ,(null, '부산', '남구')
                ,(null, '부산', '동구')
                ,(null, '부산', '동래구')
                ,(null, '부산', '부산진구')
                ,(null, '부산', '북구')
                ,(null, '부산', '사상구')
                ,(null, '부산', '사하구')
                ,(null, '부산', '서구')
                ,(null, '부산', '수영구')
                ,(null, '부산', '연제구')
                ,(null, '부산', '영도구')
                ,(null, '부산', '중구')
                ,(null, '부산', '해운대구')
            
                ,(null, '울산', '울산 전체')
                ,(null, '울산', '남구')
                ,(null, '울산', '동구')
                ,(null, '울산', '북구')
                ,(null, '울산', '울주군')
                ,(null, '울산', '중구')
                
                ,(null, '인천', '인천 전체')
                ,(null, '인천', '강화군')
                ,(null, '인천', '계양구')
                ,(null, '인천', '남동구')
                ,(null, '인천', '동구')
                ,(null, '인천', '미추홀구')
                ,(null, '인천', '부평구')
                ,(null, '인천', '서구')
                ,(null, '인천', '연수구')
                ,(null, '인천', '옹진군')
                ,(null, '인천', '중구')
            
                ,(null, '전남', '전남 전체')
                ,(null, '전남', '강진군')
                ,(null, '전남', '고흥군')
                ,(null, '전남', '곡성군')
                ,(null, '전남', '구례군')
                ,(null, '전남', '나주시')
                ,(null, '전남', '담양군')
                ,(null, '전남', '목포시')
                ,(null, '전남', '무안군')
                ,(null, '전남', '보성군')
                ,(null, '전남', '순천시')
                ,(null, '전남', '신안군')
                ,(null, '전남', '여수시')
                ,(null, '전남', '영광군')
                ,(null, '전남', '장흥군')
                ,(null, '전남', '진도군')
                ,(null, '전남', '함평군')
                ,(null, '전남', '해남군')
                ,(null, '전남', '화순군')
            
                ,(null, '전북', '전북 전체')
                ,(null, '전북', '고창군')
                ,(null, '전북', '군산시')
                ,(null, '전북', '김제시')
                ,(null, '전북', '남원시')
                ,(null, '전북', '무주군')
                ,(null, '전북', '부안군')
                ,(null, '전북', '순창군')
                ,(null, '전북', '완주군')
                ,(null, '전북', '익산시')
                ,(null, '전북', '임실군')
                ,(null, '전북', '장수군')
                ,(null, '전북', '전주시')
                ,(null, '전북', '전주시 덕진구')
                ,(null, '전북', '전주시 완산구')
                ,(null, '전북', '정읍시')
                ,(null, '전북', '진안군')
            
                ,(null, '제주', '제주 전체')
                ,(null, '제주', '서귀포시')
                ,(null, '제주', '제주시')
                
                ,(null, '충남', '충남 전체')
                ,(null, '충남', '계룡시')
                ,(null, '충남', '공주시')
                ,(null, '충남', '금산군')
                ,(null, '충남', '논산시')
                ,(null, '충남', '당진시')
                ,(null, '충남', '보령시')
                ,(null, '충남', '부여군')
                ,(null, '충남', '서산시')
                ,(null, '충남', '서천군')
                ,(null, '충남', '아산시')
                ,(null, '충남', '연기군')
                ,(null, '충남', '예산군')
                ,(null, '충남', '천안시')
                ,(null, '충남', '천안시 동남구')
                ,(null, '충남', '천안시 서북구')
                ,(null, '충남', '청양군')
                ,(null, '충남', '태안군')
                ,(null, '충남', '홍성군')
            
                ,(null, '충북', '충북 전체')
                ,(null, '충북', '괴산군')
                ,(null, '충북', '단양군')
                ,(null, '충북', '보은군')
                ,(null, '충북', '영동군')
                ,(null, '충북', '옥천군')
                ,(null, '충북', '음성군')
                ,(null, '충북', '제천시')
                ,(null, '충북', '증평군')
                ,(null, '충북', '진천군')
                ,(null, '충북', '청원군')
                ,(null, '충북', '청주시')
                ,(null, '충북', '청주시 상당구')
                ,(null, '충북', '청주시 서원구')
                ,(null, '충북', '청주시 청원구')
                ,(null, '충북', '청주시 흥덕구')
                ,(null, '충북', '충주시')
            
                ,(null, '세종', '세종특별자치시');";

                break;

            case 'job_industry':
                $sql = "
                insert into `job_industry` values (null, '생산/제조/단순노무', '생산/제조')
                ,(null, '생산/제조/단순노무', '조립/포장')
                ,(null, '생산/제조/단순노무', '영업/판매')
                ,(null, '생산/제조/단순노무', '제품 검사')
                ,(null, '생산/제조/단순노무', '사무 보조')
                ,(null, '생산/제조/단순노무', '농림 어업')
                ,(null, '생산/제조/단순노무', '기타')
                        
                ,(null, '경비/시설관리', '경비원')
                ,(null, '경비/시설관리', '건물/시설관리')
                ,(null, '경비/시설관리', '주차 관리')
                ,(null, '경비/시설관리', '안전 점검원')
                        
                ,(null, '청소/미화', '청소원')
                ,(null, '청소/미화', '아파트 청소')
                ,(null, '청소/미화', '건물/모텔 청소')
                ,(null, '청소/미화', '환경 미화')
                ,(null, '청소/미화', '세차/세탁')
                ,(null, '청소/미화', '방역')
                        
                ,(null, '도우미', '가사도우미')
                ,(null, '도우미', '요양/간병')
                ,(null, '도우미', '산후조리')
                ,(null, '도우미', '육아/보육')
                ,(null, '도우미', '학교/병원급식')
                ,(null, '도우미', '문화시설')
                        
                ,(null, '음식점/마트/주유', '주방')
                ,(null, '음식점/마트/주유', '서빙')
                ,(null, '음식점/마트/주유', '편의점/마트')
                ,(null, '음식점/마트/주유', '매표소/카운터')
                ,(null, '음식점/마트/주유', '주유')
                ,(null, '음식점/마트/주유', '커피숍/바리스타')
                        
                ,(null, '배달/운전/택배', '배달')
                ,(null, '배달/운전/택배', '택배')
                ,(null, '배달/운전/택배', '퀵서비스')
                ,(null, '배달/운전/택배', '운전')
                ,(null, '배달/운전/택배', '운송')
                        
                ,(null, '안내/접수/상담', '안내원')
                ,(null, '안내/접수/상담', '접수/예약')
                ,(null, '안내/접수/상담', '상담원')
                        
                ,(null, '공공/전문', '교육/강사/해설사')
                ,(null, '공공/전문', '교통/생활지도')
                ,(null, '공공/전문', '리서치/설문')
                ,(null, '공공/전문', '번역')
                ,(null, '공공/전문', '문화예술')
                ,(null, '공공/전문', '기타')
                        
                ,(null, '취업창업형(시장형)', '공동작업형 사업')
                ,(null, '취업창업형(시장형)', '제조 판매형')
                ,(null, '취업창업형(시장형)', '노노케어')
                ,(null, '취업창업형(시장형)', '취약계층 지원봉사')
                ,(null, '취업창업형(시장형)', '공공시설 지원봉사')
                ,(null, '취업창업형(시장형)', '경륜전수 지원봉사');";
                
            default:
                // 존재하지 않는 테이블명일 때
                echo "<script>alert('존재하지 않는 테이블명 입니다.');</script>";
                break;
        } // end of switch

        if(mysqli_query($conn, $sql)){
        echo "<script>alert('$table_name 테이블 초기값 셋팅 완료');</script>";
        } else {
        echo "insert_init_data error ".mysqli_error($conn);
        }
    } // end of if table is empty

} // end of function
?>
