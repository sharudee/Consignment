-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2015 at 03:19 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cosdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `commission_class`
--

CREATE TABLE IF NOT EXISTS `commission_class` (
  `id` int(10) NOT NULL,
  `cust_code` varchar(8) NOT NULL,
  `class` varchar(2) NOT NULL,
  `sale_target` decimal(9,2) NOT NULL,
  `created_by` varchar(15) NOT NULL,
  `created_at` date NOT NULL,
  `updated_by` varchar(15) NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `commission_mast`
--

CREATE TABLE IF NOT EXISTS `commission_mast` (
  `id` int(10) unsigned NOT NULL,
  `class` varchar(2) NOT NULL,
  `sale_start` decimal(9,2) NOT NULL,
  `sale_end` decimal(9,2) NOT NULL,
  `commission_rate` decimal(5,2) NOT NULL,
  `created_by` varchar(15) NOT NULL,
  `created_at` date NOT NULL,
  `updated_by` varchar(15) NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `commission_pc`
--

CREATE TABLE IF NOT EXISTS `commission_pc` (
  `id` int(10) unsigned NOT NULL,
  `year` int(4) NOT NULL,
  `month` int(2) NOT NULL,
  `cust_code` varchar(8) NOT NULL,
  `emp_code` varchar(6) NOT NULL,
  `commission_amt` decimal(8,2) NOT NULL,
  `created_by` varchar(15) NOT NULL,
  `created_at` date NOT NULL,
  `updated_by` varchar(15) NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `cos_invdet`
--

CREATE TABLE IF NOT EXISTS `cos_invdet` (
  `id` int(10) unsigned NOT NULL,
  `cos_entity` varchar(8) NOT NULL,
  `cos_no` varchar(2) NOT NULL,
  `doc_code` varchar(4) NOT NULL,
  `doc_no` varchar(12) NOT NULL,
  `item` int(3) NOT NULL,
  `prod_code` varchar(22) NOT NULL,
  `prod_name` varchar(50) NOT NULL,
  `bar_code` varchar(14) NOT NULL,
  `uom_code` varchar(4) NOT NULL,
  `unit_price` decimal(8,2) NOT NULL,
  `sale_price` decimal(8,2) NOT NULL,
  `disc_rate` decimal(5,2) NOT NULL,
  `vat_rate` decimal(5,2) NOT NULL,
  `qty` decimal(8,2) NOT NULL,
  `amt` decimal(8,2) NOT NULL,
  `disc_amt` decimal(8,2) NOT NULL,
  `vat_amt` decimal(8,2) NOT NULL,
  `net_amt` decimal(8,2) NOT NULL,
  `ds_no` varchar(12) DEFAULT NULL,
  `sku` varchar(22) DEFAULT NULL,
  `created_by` varchar(15) NOT NULL,
  `created_at` date NOT NULL,
  `updated_by` varchar(15) NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `cos_invmast`
--

CREATE TABLE IF NOT EXISTS `cos_invmast` (
  `id` int(10) unsigned NOT NULL,
  `cos_entity` varchar(8) NOT NULL,
  `cos_no` varchar(2) NOT NULL,
  `doc_code` varchar(4) NOT NULL,
  `doc_no` varchar(12) NOT NULL,
  `doc_date` date NOT NULL,
  `req_date` date DEFAULT NULL,
  `pmt_no` varchar(12) NOT NULL,
  `cust_code` varchar(8) NOT NULL,
  `cust_name` varchar(50) NOT NULL,
  `ship_titlename` varchar(10) NOT NULL,
  `ship_custcode` varchar(8) NOT NULL,
  `ship_custname` varchar(50) NOT NULL,
  `ship_custsurname` varchar(50) NOT NULL,
  `ship_address1` varchar(50) NOT NULL,
  `ship_address2` varchar(50) DEFAULT NULL,
  `ship_tel` varchar(30) NOT NULL,
  `prov_code` varchar(2) NOT NULL,
  `post_code` varchar(5) NOT NULL,
  `email_address` varchar(30) DEFAULT NULL,
  `po_file` varchar(30) NOT NULL,
  `map_file` varchar(30) DEFAULT NULL,
  `gp1` decimal(5,2) NOT NULL,
  `gp2` decimal(5,2) DEFAULT NULL,
  `gp3` decimal(5,2) DEFAULT NULL,
  `disc_cust` decimal(5,2) DEFAULT NULL,
  `ref_no` varchar(20) DEFAULT NULL,
  `sm_code` varchar(8) NOT NULL,
  `wh_code` varchar(8) NOT NULL,
  `vat_rate` decimal(9,2) NOT NULL,
  `tot_qty` decimal(9,2) NOT NULL,
  `tot_amt` decimal(9,2) NOT NULL,
  `tot_vatamt` decimal(9,2) NOT NULL,
  `tot_netamt` decimal(9,2) NOT NULL,
  `tot_discamt` decimal(9,2) NOT NULL,
  `tot_subamt` decimal(9,2) NOT NULL,
  `remark1` varchar(50) DEFAULT NULL,
  `remark2` varchar(50) DEFAULT NULL,
  `doccan_by` varchar(15) DEFAULT NULL,
  `doccan_date` date DEFAULT NULL,
  `doccan_rem` varchar(50) DEFAULT NULL,
  `tf_st` varchar(1) DEFAULT '',
  `tf_by` varchar(15) DEFAULT NULL,
  `tf_date` date DEFAULT NULL,
  `ictran_code` varchar(4) NOT NULL,
  `doc_status` varchar(4) NOT NULL,
  `created_by` varchar(15) NOT NULL,
  `created_at` date NOT NULL,
  `updated_by` varchar(15) NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cos_itemdet`
--

CREATE TABLE IF NOT EXISTS `cos_itemdet` (
  `id` int(10) unsigned NOT NULL,
  `cos_entity` varchar(8) NOT NULL,
  `cos_no` varchar(2) NOT NULL,
  `doc_code` varchar(4) NOT NULL,
  `doc_no` varchar(12) NOT NULL,
  `item` int(3) NOT NULL,
  `prod_code` varchar(22) NOT NULL,
  `prod_name` varchar(50) NOT NULL,
  `bar_code` varchar(14) NOT NULL,
  `uom_code` varchar(4) NOT NULL,
  `unit_price` decimal(8,2) NOT NULL,
  `qty` decimal(8,2) NOT NULL,
  `amt` decimal(8,2) NOT NULL,
  `created_by` varchar(15) NOT NULL,
  `created_at` date NOT NULL,
  `updated_by` varchar(15) NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `cos_itemmast`
--

CREATE TABLE IF NOT EXISTS `cos_itemmast` (
  `id` int(10) unsigned NOT NULL,
  `cos_entity` varchar(8) NOT NULL,
  `cos_no` varchar(2) NOT NULL,
  `doc_code` varchar(4) NOT NULL,
  `doc_no` varchar(12) NOT NULL,
  `doc_date` date NOT NULL,
  `cust_code` varchar(8) NOT NULL,
  `cust_name` varchar(50) NOT NULL,
  `ref_no` varchar(20) DEFAULT NULL,
  `wh_code` varchar(8) NOT NULL,
  `remark` varchar(50) DEFAULT NULL,
  `tot_qty` decimal(9,2) NOT NULL,
  `tot_amt` decimal(9,2) NOT NULL,
  `gen_by` varchar(15) DEFAULT NULL,
  `gen_date` date DEFAULT NULL,
  `doccan_by` varchar(15) DEFAULT NULL,
  `doccan_date` date DEFAULT NULL,
  `doc_status` varchar(4) NOT NULL,
  `created_by` varchar(15) NOT NULL,
  `created_at` date NOT NULL,
  `updated_by` varchar(15) NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `cos_pcmast`
--

CREATE TABLE IF NOT EXISTS `cos_pcmast` (
  `id` int(10) unsigned NOT NULL,
  `emp_code` varchar(6) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `created_by` varchar(15) NOT NULL,
  `created_at` date NOT NULL,
  `updated_by` varchar(15) NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cos_pcwork`
--

CREATE TABLE IF NOT EXISTS `cos_pcwork` (
  `id` int(10) unsigned NOT NULL,
  `year` int(4) NOT NULL,
  `month` int(2) NOT NULL,
  `cust_code` varchar(8) NOT NULL,
  `emp_code` varchar(6) NOT NULL,
  `work_date` date NOT NULL,
  `pc_type` varchar(1) NOT NULL,
  `time_start` date NOT NULL,
  `time_end` date NOT NULL,
  `created_by` varchar(15) NOT NULL,
  `created_at` date NOT NULL,
  `updated_by` varchar(15) NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `cos_product`
--

CREATE TABLE IF NOT EXISTS `cos_product` (
  `id` int(10) unsigned NOT NULL,
  `cos_no` varchar(2) NOT NULL,
  `cos_entity` varchar(8) NOT NULL,
  `cust_code` varchar(8) NOT NULL,
  `prod_code` varchar(22) NOT NULL,
  `prod_name` varchar(50) NOT NULL,
  `bar_code` varchar(14) NOT NULL,
  `unit_price` decimal(8,2) NOT NULL,
  `sale_price` decimal(8,2) NOT NULL,
  `qty_production` decimal(8,2) NOT NULL,
  `qty_return` decimal(8,2) NOT NULL,
  `qty_sale` decimal(8,2) NOT NULL,
  `qty_remand` decimal(8,2) NOT NULL,
  `qty_bal` decimal(8,2) NOT NULL,
  `pdgrp_code` varchar(4) DEFAULT NULL,
  `pdgrp_desc` varchar(40) DEFAULT NULL,
  `pdbrnd_code` varchar(4) DEFAULT NULL,
  `pdbrnd_desc` varchar(40) DEFAULT NULL,
  `pdtype_code` varchar(4) DEFAULT NULL,
  `pdtype_desc` varchar(40) DEFAULT NULL,
  `pddsgn_code` varchar(4) DEFAULT NULL,
  `pddsgn_desc` varchar(40) DEFAULT NULL,
  `pdsize_code` varchar(10) DEFAULT NULL,
  `pdsize_desc` varchar(40) DEFAULT NULL,
  `pdcolor_code` varchar(3) DEFAULT NULL,
  `pdcolor_desc` varchar(40) DEFAULT NULL,
  `pdmisc_code` varchar(2) DEFAULT NULL,
  `pdmisc_desc` varchar(40) DEFAULT NULL,
  `pdmodel_code` varchar(4) DEFAULT NULL,
  `pdmodel_desc` varchar(40) DEFAULT NULL,
  `tf_st` varchar(1) DEFAULT NULL,
  `tf_by` varchar(15) DEFAULT NULL,
  `tf_date` date DEFAULT NULL,
  `prod_st` varchar(1) DEFAULT NULL,
  `created_by` varchar(15) NOT NULL,
  `created_at` date NOT NULL,
  `updated_by` varchar(15) NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cos_product_img`
--

CREATE TABLE IF NOT EXISTS `cos_product_img` (
  `id` int(10) unsigned NOT NULL,
  `prod_code` varchar(22) NOT NULL,
  `item` int(3) NOT NULL,
  `prod_img` varchar(30) NOT NULL,
  `created_by` varchar(15) NOT NULL,
  `created_at` date NOT NULL,
  `updated_by` varchar(15) NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `custgrp_mast`
--

CREATE TABLE IF NOT EXISTS `custgrp_mast` (
  `custgrp_code` varchar(4) NOT NULL,
  `custgrp_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `custgrp_mast`
--

INSERT INTO `custgrp_mast` (`custgrp_code`, `custgrp_name`) VALUES
('CDR', 'Central '),
('MDS', 'The Mall');

-- --------------------------------------------------------

--
-- Table structure for table `cust_mast`
--

CREATE TABLE IF NOT EXISTS `cust_mast` (
  `id` int(10) unsigned NOT NULL,
  `name_title` varchar(10) NOT NULL,
  `cust_name` varchar(50) NOT NULL,
  `cust_surname` varchar(50) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `address2` varchar(50) DEFAULT NULL,
  `tel` varchar(30) DEFAULT NULL,
  `email_address` varchar(30) DEFAULT NULL,
  `mobile_no` varchar(30) NOT NULL,
  `line_id` varchar(30) DEFAULT NULL,
  `map` varchar(30) DEFAULT NULL,
  `id_card` varchar(13) NOT NULL,
  `created_by` varchar(15) NOT NULL,
  `creared_at` date NOT NULL,
  `updated_by` varchar(15) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `doc_mast`
--

CREATE TABLE IF NOT EXISTS `doc_mast` (
  `id` int(10) unsigned NOT NULL,
  `doc_code` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `doc_desc` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `doc_ctrl` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `ictran_code` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `post_type` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_by` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `entity`
--

CREATE TABLE IF NOT EXISTS `entity` (
  `id` int(10) unsigned NOT NULL,
  `entity_code` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `entity_tname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `entity_ename` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cust_grp` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `tax_rate` decimal(5,2) NOT NULL,
  `ent_ctrl` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
   `cos_no` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `dsgrp_type` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `sale_type` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `ret_type` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_by` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `entity`
--

INSERT INTO `entity` (`id`, `entity_code`, `entity_tname`, `entity_ename`, `cust_grp`, `tax_rate`, `ent_ctrl`, `dsgrp_type`, `sale_type`, `ret_type`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'B10', 'aaa', 'aaa', 'aa', '0.00', 'aa', 'aa', '', '', '', '0000-00-00', '', '0000-00-00'),
(2, 'B10', 'a', 'a', 'a', '7.00', 'a', 'a', 'a', 'a', '', '0000-00-00', 'a', '2015-11-01');

-- --------------------------------------------------------

--
-- Table structure for table `incentive_mast`
--

CREATE TABLE IF NOT EXISTS `incentive_mast` (
  `id` int(10) unsigned NOT NULL,
  `pdmodel_code` varchar(4) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `incentive_amt` decimal(8,2) NOT NULL,
  `created_by` varchar(15) NOT NULL,
  `created_at` date NOT NULL,
  `updated_by` varchar(15) NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `incentive_pc`
--

CREATE TABLE IF NOT EXISTS `incentive_pc` (
  `id` int(10) unsigned NOT NULL,
  `year` int(4) NOT NULL,
  `month` int(2) NOT NULL,
  `cust_code` varchar(8) NOT NULL,
  `emp_code` varchar(6) NOT NULL,
  `incentive_amt` decimal(8,2) NOT NULL,
  `created_by` varchar(15) NOT NULL,
  `created_at` date NOT NULL,
  `updated_by` varchar(15) NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_11_16_074755_create_entity_table', 1),
('2015_11_16_080527_create_doc_mast_table', 1),
('2015_11_16_083000_create_wh_mast_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pmt_consignee`
--

CREATE TABLE IF NOT EXISTS `pmt_consignee` (
  `id` int(10) unsigned NOT NULL,
  `pmt_no` varchar(12) NOT NULL,
  `cust_code` varchar(8) NOT NULL,
  `flag_grp` varchar(1) NOT NULL,
  `craeted_by` varchar(15) NOT NULL,
  `created_at` date NOT NULL,
  `updated_by` varchar(15) NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pmt_discount`
--

CREATE TABLE IF NOT EXISTS `pmt_discount` (
  `id` int(10) unsigned NOT NULL,
  `pmt_no` varchar(12) NOT NULL,
  `disc_code` varchar(4) NOT NULL,
  `pdsize_code` varchar(4) NOT NULL,
  `disc_amt` decimal(8,2) NOT NULL,
  `created_by` varchar(15) NOT NULL,
  `created_at` date NOT NULL,
  `updated_by` varchar(15) NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `pmt_mast`
--

CREATE TABLE IF NOT EXISTS `pmt_mast` (
  `id` int(10) unsigned NOT NULL,
  `pmt_no` varchar(12) NOT NULL,
  `pmt_date` date NOT NULL,
  `pmt_desc` varchar(70) NOT NULL,
  `dept_code` varchar(6) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `ref_no` varchar(20) NOT NULL,
  `gp` decimal(5,2) NOT NULL,
  `remark` varchar(200) NOT NULL,
  `status` varchar(4) NOT NULL,
  `created_by` varchar(15) NOT NULL,
  `created_at` date NOT NULL,
  `updated_by` varchar(15) NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pmt_premium_set_det`
--

CREATE TABLE IF NOT EXISTS `pmt_premium_set_det` (
  `id` int(10) unsigned NOT NULL,
  `pmt_no` varchar(12) NOT NULL,
  `premium_set_code` varchar(4) NOT NULL,
  `prod_code` varchar(22) NOT NULL,
  `created_by` varchar(15) NOT NULL,
  `created_at` date NOT NULL,
  `updated_by` varchar(15) NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `pmt_prenium_set`
--

CREATE TABLE IF NOT EXISTS `pmt_prenium_set` (
  `id` int(10) unsigned NOT NULL,
  `pmt_no` varchar(12) NOT NULL,
  `premium_set_code` varchar(4) NOT NULL,
  `premium_set_desc` varchar(50) NOT NULL,
  `created_by` varchar(15) NOT NULL,
  `created_at` date NOT NULL,
  `updated_by` varchar(15) NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `pmt_product`
--

CREATE TABLE IF NOT EXISTS `pmt_product` (
  `id` int(10) unsigned NOT NULL,
  `pmt_no` varchar(12) NOT NULL,
  `prod_code` varchar(22) NOT NULL,
  `prod_name` varchar(50) NOT NULL,
  `disc1` decimal(8,2) DEFAULT NULL,
  `disc2` decimal(8,2) DEFAULT NULL,
  `disc_baht` decimal(8,2) DEFAULT NULL,
  `unit_price` decimal(8,2) NOT NULL,
  `sale_price` decimal(8,2) NOT NULL,
  `created_by` varchar(15) NOT NULL,
  `created_at` date NOT NULL,
  `updated_by` varchar(15) NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pmt_product_set`
--

CREATE TABLE IF NOT EXISTS `pmt_product_set` (
  `id` int(10) unsigned NOT NULL,
  `pmt_no` varchar(12) NOT NULL,
  `prod_set_code` varchar(4) NOT NULL,
  `prod_set_desc` varchar(50) NOT NULL,
  `created_by` varchar(15) NOT NULL,
  `created_at` date NOT NULL,
  `updated_by` varchar(15) NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pmt_product_set_det`
--

CREATE TABLE IF NOT EXISTS `pmt_product_set_det` (
  `id` int(10) unsigned NOT NULL,
  `pmt_no` varchar(12) NOT NULL,
  `prod_set_code` varchar(4) NOT NULL,
  `prod_code` varchar(22) NOT NULL,
  `created_by` varchar(15) NOT NULL,
  `created_at` date NOT NULL,
  `updated_by` varchar(15) NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wh_mast`
--

CREATE TABLE IF NOT EXISTS `wh_mast` (
  `id` int(10) unsigned NOT NULL,
  `wh_code` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `wh_tdesc` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `wh_edesc` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `address1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `doc_ctrl` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contact_name` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_by` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commission_class`
--
ALTER TABLE `commission_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commission_mast`
--
ALTER TABLE `commission_mast`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commission_pc`
--
ALTER TABLE `commission_pc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cos_invdet`
--
ALTER TABLE `cos_invdet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cos_invmast`
--
ALTER TABLE `cos_invmast`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cos_itemdet`
--
ALTER TABLE `cos_itemdet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cos_itemmast`
--
ALTER TABLE `cos_itemmast`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cos_pcmast`
--
ALTER TABLE `cos_pcmast`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cos_pcwork`
--
ALTER TABLE `cos_pcwork`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cos_product`
--
ALTER TABLE `cos_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cos_product_img`
--
ALTER TABLE `cos_product_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custgrp_mast`
--
ALTER TABLE `custgrp_mast`
  ADD PRIMARY KEY (`custgrp_code`);

--
-- Indexes for table `cust_mast`
--
ALTER TABLE `cust_mast`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc_mast`
--
ALTER TABLE `doc_mast`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entity`
--
ALTER TABLE `entity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incentive_mast`
--
ALTER TABLE `incentive_mast`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incentive_pc`
--
ALTER TABLE `incentive_pc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pmt_consignee`
--
ALTER TABLE `pmt_consignee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pmt_discount`
--
ALTER TABLE `pmt_discount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pmt_mast`
--
ALTER TABLE `pmt_mast`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pmt_premium_set_det`
--
ALTER TABLE `pmt_premium_set_det`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pmt_prenium_set`
--
ALTER TABLE `pmt_prenium_set`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pmt_product`
--
ALTER TABLE `pmt_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pmt_product_set`
--
ALTER TABLE `pmt_product_set`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pmt_product_set_det`
--
ALTER TABLE `pmt_product_set_det`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wh_mast`
--
ALTER TABLE `wh_mast`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commission_class`
--
ALTER TABLE `commission_class`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `commission_mast`
--
ALTER TABLE `commission_mast`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `commission_pc`
--
ALTER TABLE `commission_pc`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cos_invdet`
--
ALTER TABLE `cos_invdet`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cos_invmast`
--
ALTER TABLE `cos_invmast`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cos_itemdet`
--
ALTER TABLE `cos_itemdet`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cos_itemmast`
--
ALTER TABLE `cos_itemmast`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cos_pcmast`
--
ALTER TABLE `cos_pcmast`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cos_pcwork`
--
ALTER TABLE `cos_pcwork`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cos_product`
--
ALTER TABLE `cos_product`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cos_product_img`
--
ALTER TABLE `cos_product_img`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cust_mast`
--
ALTER TABLE `cust_mast`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `doc_mast`
--
ALTER TABLE `doc_mast`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `entity`
--
ALTER TABLE `entity`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `incentive_mast`
--
ALTER TABLE `incentive_mast`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `incentive_pc`
--
ALTER TABLE `incentive_pc`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pmt_consignee`
--
ALTER TABLE `pmt_consignee`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pmt_discount`
--
ALTER TABLE `pmt_discount`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pmt_mast`
--
ALTER TABLE `pmt_mast`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pmt_premium_set_det`
--
ALTER TABLE `pmt_premium_set_det`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pmt_prenium_set`
--
ALTER TABLE `pmt_prenium_set`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pmt_product`
--
ALTER TABLE `pmt_product`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pmt_product_set`
--
ALTER TABLE `pmt_product_set`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pmt_product_set_det`
--
ALTER TABLE `pmt_product_set_det`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wh_mast`
--
ALTER TABLE `wh_mast`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
