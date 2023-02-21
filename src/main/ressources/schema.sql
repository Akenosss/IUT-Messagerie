-- chat
CREATE TABLE chat (
    id             int auto_increment primary key,
    date_message   datetime not null,
    user           varchar(50) not null,
    content        text
);