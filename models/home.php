<?php

class HomeModel extends Model
{
    public function Index()
    {
        $this->query("SELECT 
    `dashnumbers`.`id`,
    `dashnumbers`.`newrefs`,
    `dashnumbers`.`newrefsgoal`,
    `dashnumbers`.`newrefspercent`,
    `dashnumbers`.`prescrefill`,
    `dashnumbers`.`prescrefillgoal`,
    `dashnumbers`.`prescrefillpercent`,
    `dashnumbers`.`claimscollected`,
    `dashnumbers`.`claimscollectedgoal`,
    `dashnumbers`.`claimscollectedpercent`,
    `dashnumbers`.`dso`,
    `dashnumbers`.`dsogoal`,
    `dashnumbers`.`dsoou`,
    `dashnumbers`.`ar`,
    FORMAT(100 * (1 - FORMAT(`dashnumbers`.`arprevmth` / `dashnumbers`.`ar`,
            2)),
        2) AS arprevmth,
    `dashnumbers`.`unbill`,
    FORMAT(100 * (1 - FORMAT(`dashnumbers`.`unbillprevmth` / `dashnumbers`.`unbill`,
            2)),
        2) AS unbillprevmth,
    `dashnumbers`.`cmsclaim`,
    FORMAT(100 * (1 - FORMAT(`dashnumbers`.`cmsclaimprevmth` / `dashnumbers`.`cmsclaim`,
            2)),
        2) AS cmsclaimprevmth,
    `dashnumbers`.`medicaid`,
    FORMAT(100 * (1 - FORMAT(`dashnumbers`.`medicaidprevmth` / `dashnumbers`.`medicaid`,
            2)),
        2) AS medicaidprevmth,
    `dashnumbers`.`comclaim`,
    FORMAT(100 * (1 - FORMAT(`dashnumbers`.`comclaimprevmth` / `dashnumbers`.`comclaim`,
            2)),
        2) AS comclaimprevmth,
    `dashnumbers`.`selfpayclaim` + `dashnumbers`.`charityclaim` + `dashnumbers`.`indigentclaim` AS selfcharindg,
    FORMAT(100 * (1 - FORMAT((`dashnumbers`.`selfpayclaimprevmth` + `dashnumbers`.`charityclaimprevmth` + `dashnumbers`.`indigentclaimprevmth`) / (`dashnumbers`.`selfpayclaim` + `dashnumbers`.`charityclaim` + `dashnumbers`.`indigentclaim`),
            2)),
        2) AS selfcharindgprevmth,
    `dashnumbers`.`cashgoal`,
    `dashnumbers`.`cashgoalpercent`
FROM
    `projectnucleus`.`dashnumbers`;");
        $rows = $this->resultSet();
        return $rows;
    }
}