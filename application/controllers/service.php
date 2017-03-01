<?php

//require APPPATH.'/libraries/REST_Controller.php';
//class Engine extends REST_Controller
class Service extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		// Load the rest client spark
		$this->load->spark('restclient/2.1.0');

		// Load the library
		$this->load->library('rest');

		// Run some setup
		$this->rest->initialize(array('server' => 'http://api.worldbank.org/'));
		$this->load->helper('url');
	}

	function get_country_data($page)
	{
	    // deklarasi variabel untuk menampung data array hasil akses REST API
		$countries = array();

     	// deklarasi variabel untuk menampung data field array
		$country_data['id'] = "";
		$country_data['name'] = "";

		// akses REST API
		$result = $this->rest->get('countries/?format=json&page='.$page);

		// kode program pada bagian ini sangat tergantung keluaran JSON dari API yang kita gunakan
		// jika keluaran JSO dari API-nya ternyata string maka harus di decode terlebih dahulu dengan perintah json_decode()
		// pemrosesan data-nya juga sangat tergantung dari struktur JSON-nya, Anda bisa mengecek melalui http://jsonviewer.stack.hu/
		// Anda harus banyak bereksperimen pada bagian ini, silahkan gunakan echo atau var_dump() untuk memastikan isi dari setiap variabel
		foreach($result as $result_object)
		{
			foreach ($result_object as $key=>$value)
			{
				if(!($key==="page" || $key==="pages" || $key==="per_page" || $key==="total"))
				{
					foreach($value as $attribute=>$attribute_value)
					{
						//echo ($attribute. "\n");
						if ($attribute =='id')
						{
							$country_data['id']= $attribute_value;
						}
						if ($attribute =='name')
						{
							$country_data['name']= $attribute_value;
						}
					}
					array_push($countries,$country_data);
				}
			}
		}
		return $countries;
	}

	function get_country_data_spesific($countryid)
	{
	    // deklarasi variabel untuk menampung data array hasil akses REST API
		$countries = array();

     	// deklarasi variabel untuk menampung data field array
		$country_data['id'] = "";
		$country_data['name'] = "";
		$country_data['region'] = "";
		$country_data['capital_city'] = "";
		$country_data['longitude'] = "";
		$country_data['latitude'] = "";
    //tambah atribut json
    $country_data['admin_region'] = "";
		$country_data['income_level'] = "";
		$country_data['lending_type'] = "";

		// akses REST API
		$result = $this->rest->get('countries/'.$countryid.'/?format=json');

		// kode program pada bagian ini sangat tergantung keluaran JSON dari API yang kita gunakan
		// jika keluaran JSO dari API-nya ternyata string maka harus di decode terlebih dahulu dengan perintah json_decode()
		// pemrosesan data-nya juga sangat tergantung dari struktur JSON-nya, Anda bisa mengecek melalui http://jsonviewer.stack.hu/
		// Anda harus banyak bereksperimen pada bagian ini, silahkan gunakan echo atau var_dump() untuk memastikan isi dari setiap variabel
		foreach($result as $result_object)
		{
			foreach ($result_object as $key=>$value)
			{
				if(!($key==="page" || $key==="pages" || $key==="per_page" || $key==="total"))
				{
					foreach($value as $attribute=>$attribute_value)
					{
						//echo ($attribute. "\n");
						if ($attribute =='id')
						{
							$country_data['id']= $attribute_value;
						}
						if ($attribute =='name')
						{
							$country_data['name']= $attribute_value;
						}
						if ($attribute =='region')
						{
							$country_data['region']= $attribute_value->value;
						}
						if ($attribute =='capitalCity')
						{
							$country_data['capital_city']= $attribute_value;
						}
						if ($attribute =='longitude')
						{
							$country_data['longitude']= $attribute_value;
						}
						if ($attribute =='latitude')
						{
							$country_data['latitude']= $attribute_value;
						}
            if ($attribute =='adminregion')
						{
							$country_data['admin_region']= $attribute_value->value;
						}
            if ($attribute =='incomeLevel')
						{
							$country_data['income_level']= $attribute_value->value;
						}
						if ($attribute =='lendingType')
						{
							$country_data['lending_type']= $attribute_value->value;
						}
					}
					array_push($countries,$country_data);
				}
			}
		}
		return $countries;
	}

	function get_gdp_country($country_id)
	{
	    // deklarasi variabel untuk menampung data array hasil akses REST API
		$gdp = array();

     	// deklarasi variabel untuk menampung data field array
		$gdp_data['indicator'] = "";
		$gdp_data['country'] = "";
		$gdp_data['value'] = "";
		$gdp_data['decimal'] = "";
		$gdp_data['date'] = "";

		// akses REST API
		$result = $this->rest->get('countries/'.$country_id.'/indicators/NY.GDP.MKTP.CD?date=2000:2006&format=json');

		// kode program pada bagian ini sangat tergantung keluaran JSON dari API yang kita gunakan
		// jika keluaran JSO dari API-nya ternyata string maka harus di decode terlebih dahulu dengan perintah json_decode()
		// pemrosesan data-nya juga sangat tergantung dari struktur JSON-nya, Anda bisa mengecek melalui http://jsonviewer.stack.hu/
		// Anda harus banyak bereksperimen pada bagian ini, silahkan gunakan echo atau var_dump() untuk memastikan isi dari setiap variabel
		foreach($result as $result_object)
		{
			foreach ($result_object as $key=>$value)
			{
				if(!($key==="page" || $key==="pages" || $key==="per_page" || $key==="total"))
				{
					foreach($value as $attribute=>$attribute_value)
					{
						//echo ($attribute. "\n");
						if ($attribute =='indicator')
						{
							$gdp_data['indicator']= $attribute_value->value;
						}
						if ($attribute =='country')
						{
							$gdp_data['country']= $attribute_value->value;
						}
						if ($attribute =='value')
						{
							$gdp_data['value']= $attribute_value;
						}
						if ($attribute =='decimal')
						{
							$gdp_data['decimal']= $attribute_value;
						}
						if ($attribute =='date')
						{
							$gdp_data['date']= $attribute_value;
						}
					}
					array_push($gdp,$gdp_data);
				}
			}
		}
		return $gdp;
	}

	function get_gni_country($country_id)
	{
	    // deklarasi variabel untuk menampung data array hasil akses REST API
		$gdp = array();

     	// deklarasi variabel untuk menampung data field array
		$gdp_data['indicator'] = "";
		$gdp_data['country'] = "";
		$gdp_data['value'] = "";
		$gdp_data['decimal'] = "";
		$gdp_data['date'] = "";

		// akses REST API
		$result = $this->rest->get('countries/'.$country_id.'/indicators/NY.GNP.PCAP.CD?date=2000:2006&format=json');

		// kode program pada bagian ini sangat tergantung keluaran JSON dari API yang kita gunakan
		// jika keluaran JSO dari API-nya ternyata string maka harus di decode terlebih dahulu dengan perintah json_decode()
		// pemrosesan data-nya juga sangat tergantung dari struktur JSON-nya, Anda bisa mengecek melalui http://jsonviewer.stack.hu/
		// Anda harus banyak bereksperimen pada bagian ini, silahkan gunakan echo atau var_dump() untuk memastikan isi dari setiap variabel
		foreach($result as $result_object)
		{
			foreach ($result_object as $key=>$value)
			{
				if(!($key==="page" || $key==="pages" || $key==="per_page" || $key==="total"))
				{
					foreach($value as $attribute=>$attribute_value)
					{
						//echo ($attribute. "\n");
						if ($attribute =='indicator')
						{
							$gdp_data['indicator']= $attribute_value->value;
						}
						if ($attribute =='country')
						{
							$gdp_data['country']= $attribute_value->value;
						}
						if ($attribute =='value')
						{
							$gdp_data['value']= $attribute_value;
						}
						if ($attribute =='decimal')
						{
							$gdp_data['decimal']= $attribute_value;
						}
						if ($attribute =='date')
						{
							$gdp_data['date']= $attribute_value;
						}
					}
					array_push($gdp,$gdp_data);
				}
			}
		}
		return $gdp;
	}

	function index($page)
	{
		$data['countries'] = $this->get_country_data($page);
		$this->load->view('home',$data);
	}

	function search($country)
	{
		$data['countries'] = $this->get_country_data_spesific($country);
		$this->load->view('detail',$data);
	}

	function viewGDP($country)
	{
		$data['gdp'] = $this->get_gdp_country($country);
		$this->load->view('viewgdp',$data);
	}

	function viewGNI($country)
	{
		$data['gni'] = $this->get_gni_country($country);
		$this->load->view('viewgni',$data);
	}
}
