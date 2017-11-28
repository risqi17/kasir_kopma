/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     11/9/2017 7:18:04 AM                         */
/*==============================================================*/


drop table if exists TB_BARANG;

drop table if exists TB_DETAIL_TRANSAKSI;

drop table if exists TB_KASIR;

drop table if exists TB_TRANSAKSI;

/*==============================================================*/
/* Table: TB_BARANG                                             */
/*==============================================================*/
create table TB_BARANG
(
   BRG_ID               varchar(10) not null,
   BRG_NAMA             varchar(300),
   BRG_STOCK            int,
   BRG_HARGA            int,
   BRG_EXPIRED          date,
   BRG_INPUT_TGL        datetime,
   BRG_HARGA_JUAL       int,
   primary key (BRG_ID)
);

/*==============================================================*/
/* Table: TB_DETAIL_TRANSAKSI                                   */
/*==============================================================*/
create table TB_DETAIL_TRANSAKSI
(
   TRANS_ID             varchar(10) not null,
   BRG_ID               varchar(10) not null,
   TRANS_QTY            int,
   TRANS_HARGA_SATUAN   int,
   TRANS_SEMUA          int,
   primary key (TRANS_ID, BRG_ID)
);

/*==============================================================*/
/* Table: TB_KASIR                                              */
/*==============================================================*/
create table TB_KASIR
(
   KSR_ID               varchar(10) not null,
   KSR_PASSWORD         varchar(30),
   KSR_NAMA             varchar(100),
   KSR_JABATAN          varchar(30),
   primary key (KSR_ID)
);

/*==============================================================*/
/* Table: TB_TRANSAKSI                                          */
/*==============================================================*/
create table TB_TRANSAKSI
(
   TRANS_ID             varchar(10) not null,
   KSR_ID               varchar(10) not null,
   TRANS_TGL            datetime,
   TRANS_TOTAL          int,
   primary key (TRANS_ID)
);

alter table TB_DETAIL_TRANSAKSI add constraint FK_DIJUAL foreign key (BRG_ID)
      references TB_BARANG (BRG_ID) on delete restrict on update restrict;

alter table TB_DETAIL_TRANSAKSI add constraint FK_MEMILIKI foreign key (TRANS_ID)
      references TB_TRANSAKSI (TRANS_ID) on delete restrict on update restrict;

alter table TB_TRANSAKSI add constraint FK_MEMASUKKAN foreign key (KSR_ID)
      references TB_KASIR (KSR_ID) on delete restrict on update restrict;

