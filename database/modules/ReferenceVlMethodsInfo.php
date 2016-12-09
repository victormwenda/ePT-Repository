<?php 

	namespace database\modules;

	use database\crud\ReferenceVlMethods;

	/**
	*  
	*	ReferenceVlMethodsInfo
	*  
	* Provides High level features for interacting with the ReferenceVlMethods;
	*
	* This source code is auto-generated
    *
    * @author Victor Mwenda
    * Email : vmwenda.vm@gmail.com
    * Phone : +254(0)718034449
	*/
	class ReferenceVlMethodsInfo{

	private $build;
	private $client;
	private $action;
	private $reference_vl_methods;
	private $table = 'reference_vl_methods';
	/**
	 * ReferenceVlMethodsInfo
	 * 
	 * Class to get all the reference_vl_methods Information from the reference_vl_methods table 
	 * @param String $action
	 * @param String $client
	 * @param String $build
	 * 
	 * @author Victor Mwenda
	 * Email : vmwenda.vm@gmail.com
	 * Phone : +254718034449
	 */
	public function __construct($action = "query", $client = "mobile-android",$build="user-build") {

		$this->client = $client;
		$this->action = $action;
		$this->build = $build;
		
		$this->reference_vl_methods = new ReferenceVlMethods( $action, $client );

	}

	

		/**
	* Inserts data into the table[reference_vl_methods] in the order below
	* array ('shipment_id','sample_id','assay','value')
	* is mappped into 
	* array ($shipment_id,$sample_id,$assay,$value)
	* @return 1 if data was inserted,0 otherwise
	* if redundancy check is true, it inserts if the record if it never existed else.
	* if the record exists, it returns the number of times the record exists on the relation
	*/
	public function insert($shipment_id,$sample_id,$assay,$value,$redundancy_check= false, $printSQL = false) {
		$columns = array('shipment_id','sample_id','assay','value');
		$records = array($shipment_id,$sample_id,$assay,$value);
		return $this->reference_vl_methods->insert_prepared_records($shipment_id,$sample_id,$assay,$value,$redundancy_check,$printSQL );
	}


 	/**
     * @param $distinct
     * @param string $extraSQL
     * @return string
     */
	public function query($distinct,$extraSQL=""){

		$columns = $records = array ();
		$queried_reference_vl_methods = $this->reference_vl_methods->fetch_assoc_in_reference_vl_methods ($distinct, $columns, $records,$extraSQL );

		if($this->build == "eng-build"){
			return $this->query_eng_build($queried_reference_vl_methods);
		}
		if($this->build == "user-build"){
			return $this->query_user_build($queried_reference_vl_methods);
		}
	}
/**
     * Inserts records in a relation
     * The records are inserted in the relation columns in the order they are arranged in the array
     *
     * @param $records
     * @param bool $printSQL
     * @return bool|mysqli_result
     * @throws NullabilityException
     */
    public function insert_raw($records, $printSQL = false)
    {
        return $this->reference_vl_methods->insert_raw($records, $printSQL);
    }

    /**
     * Inserts records in a relation
     * The records are matched alongside the columns in the relation
         * @param array $columns
         * @param array $records
         * @param bool $redundancy_check
         * @param bool $printSQL
         * @return mixed
         */
        public function insert_records_to_reference_vl_methods(Array $columns, Array $records,$redundancy_check = false, $printSQL = false){
            return $this->reference_vl_methods->insert_records_to_reference_vl_methods($columns, $records,$redundancy_check,$printSQL);
        }

     /**
        * Performs a raw Query
        * @param $sql string sql to execute
        * @return string sql results
        * @throws \app\libs\marvik\libs\database\core\mysql\NullabilityException
        */
	public function rawQuery($sql){

		$queried_reference_vl_methods = $this->reference_vl_methods->get_database_utils()->rawQuery($sql);

		if($this->build == "eng-build"){
			return $this->query_eng_build($queried_reference_vl_methods);
		}
		if($this->build == "user-build"){
			return $this->query_user_build($queried_reference_vl_methods);
		}
	}

	public function query_eng_build($queried_reference_vl_methods){
		if($this->client == "web-desktop"){
			return $this->export_query_html($queried_reference_vl_methods);
		}
		if($this->client == "mobile-android"){
			return $this->export_query_json($queried_reference_vl_methods);
		}
	}
	public function query_user_build($queried_reference_vl_methods){
		if($this->client == "web-desktop"){
			return $this->export_query_html($queried_reference_vl_methods);
		}
		if($this->client == "mobile-android"){
			return $this->export_query_json($queried_reference_vl_methods);
		}
	}
	public function export_query_json($queried_reference_vl_methods){
		$query_json = json_encode($queried_reference_vl_methods);
		return $query_json;
	}
	public function export_query_html($queried_reference_vl_methods){
		$query_html = "";
		foreach ( $queried_reference_vl_methods as $reference_vl_methods_row_items ) {
			$query_html .= $this->process_query_for_html_export ( $reference_vl_methods_row_items );
		}
		return $query_html;
	}

	private function process_query_for_html_export ( $reference_vl_methods_row_items ){
		$html_export ='<div style="padding:10px;margin:10px;border:2px solid black;"><h3>'  .$this->table.  '</h3>';
		
		$shipment_id = $reference_vl_methods_row_items ['shipment_id'];
	if ($shipment_id  != null) {
	$html_export .= $this->parseHtmlExport ( 'shipment_id', $shipment_id  );
}
$sample_id = $reference_vl_methods_row_items ['sample_id'];
	if ($sample_id  != null) {
	$html_export .= $this->parseHtmlExport ( 'sample_id', $sample_id  );
}
$assay = $reference_vl_methods_row_items ['assay'];
	if ($assay  != null) {
	$html_export .= $this->parseHtmlExport ( 'assay', $assay  );
}
$value = $reference_vl_methods_row_items ['value'];
	if ($value  != null) {
	$html_export .= $this->parseHtmlExport ( 'value', $value  );
}

		
		return $html_export .='</div>';
	}

	private function parseHtmlExport($title,$message){
		return '<div style="width:400px;"><h4>' . $title . '</h4><hr /><p>' . $message . '</p></div>';
	}
} ?>
