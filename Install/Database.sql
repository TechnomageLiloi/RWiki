
create table rwiki_logs
(
	key_log bigint unsigned auto_increment,
	ts timestamp not null,
	tags varchar(1000) not null,
	data json not null,
	constraint rwiki_logs_pk
		primary key (key_log)
);

create table rwiki_config
(
    key_config varchar(100) not null,
    data json not null,
    constraint rwiki_config_pk
        primary key (key_config)
);

create table rwiki_topics
(
    key_topic bigint unsigned auto_increment,
    url varchar(250) default '/' not null,
    title varchar(100) not null,
    status tinyint unsigned default 1 not null,
    summary text not null,
    tags varchar(100) not null,
    dt timestamp not null,
    data json not null,
    constraint rwiki_topics_pk
        primary key (key_topic)
);