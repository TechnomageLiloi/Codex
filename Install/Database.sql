create table codex_logs
(
    key_log bigint unsigned auto_increment,
    ts timestamp not null,
    tags varchar(1000) not null,
    data json not null,
    constraint codex_logs_pk
        primary key (key_log)
);

create table codex_config
(
    key_config varchar(100) not null,
    data json not null,
    constraint codex_config_pk
        primary key (key_config)
);

create table codex_laws
(
    key_law varchar(1000) not null,
    program text null,
    data json not null,
    constraint codex_laws_pk
        primary key (key_law)
);