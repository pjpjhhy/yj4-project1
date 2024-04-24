CREATE TABLE member
(
    `uid`          BIGINT          NOT NULL    AUTO_INCREMENT COMMENT '고유 아이디', 
    `id`           VARCHAR(50)     NOT NULL    COMMENT '아이디',
    `email`        VARCHAR(50)     NOT NULL    COMMENT '이메일', 
    `password`     VARCHAR(200)    NOT NULL    COMMENT '비밀번호', 
    `name`         VARCHAR(20)     NOT NULL    COMMENT '이름', 
    `profile_url`  VARCHAR(100)    NULL        COMMENT '프로필 사진', 
    `social_type`  VARCHAR(10)     NULL        COMMENT '로그인 유형', 
    `member_role`  VARCHAR(10)     NULL        COMMENT '회원 유형', 
    `created_at`   DATETIME        NOT NULL    COMMENT '회원 가입 시간', 
     PRIMARY KEY (uid)
);