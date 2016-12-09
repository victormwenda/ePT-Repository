CREATE TABLE `reference_vl_calculation` (
  `shipment_id` int(11) NOT NULL,
  `sample_id` int(11) NOT NULL,
  `vl_assay` int(11) NOT NULL,
  `q1` double(10,2) NOT NULL,
  `q3` double(10,2) NOT NULL,
  `iqr` double(10,2) NOT NULL,
  `quartile_low` double(10,2) NOT NULL,
  `quartile_high` double(10,2) NOT NULL,
  `mean` double(10,2) NOT NULL,
  `sd` double(10,2) NOT NULL,
  `cv` double(10,2) NOT NULL,
  `low_limit` double(10,2) NOT NULL,
  `high_limit` double(10,2) NOT NULL,
  `calculated_on` datetime DEFAULT NULL,
  `manual_low_limit` double(10,2) NOT NULL DEFAULT '0.00',
  `manual_high_limit` double(10,2) NOT NULL DEFAULT '0.00',
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `use_range` varchar(255) NOT NULL DEFAULT 'calculated',
  PRIMARY KEY (`shipment_id`,`sample_id`,`vl_assay`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1