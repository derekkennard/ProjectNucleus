<?php
class MainModel extends Model{
	public function Index() {
		$this->query('SELECT 
						CONCAT('[[0,',
								jan,
								'],[1,',
								feb,
								'],[2,',
								march,
								'],[3,',
								april,
								'],[4,',
								may,
								'],[5,',
								june,
								'],[6,',
								july,
								'],[7,',
								aug,
								'],[8,',
								sep,
								'],[9,',
								oct,
								'],[10,',
								nov,
								'],[11,',
								`dec`,
								']]') AS jsonOutput
					FROM
						referralcharts;');
		$rows = $this->resultSet();
        return $rows;
	}
}