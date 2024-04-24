CREATE TABLE liked
(
    `id`                      BIGINT          NOT NULL    AUTO_INCREMENT COMMENT '찜 목록 아이디', 
    `member_id`               VARCHAR(50)     NOT NULL    COMMENT '회원 아이디', 
    `performance_title`       VARCHAR(50)     NOT NULL    COMMENT '공연 이름', 
    `performance_code`        VARCHAR(50)     NOT NULL    COMMENT '공연 코드',
    `performance_poster_url`  VARCHAR(100)    NOT NULL    COMMENT '공연 포스터 링크',
     PRIMARY KEY (id)
);