<?php 
	function get_college_name($slug){
		$college_slugs_names =  array("SHANMUGHA" => "Sri Shanmugha College of Engineering and Technology",
								"AVS1" => "AVS Engineering College - 2636",
								"AVS2" => "AVS College Of Technology - 2347", 
								"Dhirajlal" => "Dhirajlal Gandhi College Of Technology",
								'ERODE_SENGUNTHAR' => "Erode Sengunthar Engineering College",
								'EXCEL1' => "Excel college of engineering and technology - 2664",
								'EXCEL2' => "Excel Engineering College - 2634",
								'KAVERY' => "The Kavery Engineering College",
								'KIOT' => "Knowledge Institute of Technology",
								'KSR1' => "K. S. Rangasamy College of Technology - 2607",
								'KSR2' => "K.S.R College of Eng - 2613",
								'KSR3' => "KSR Institute for Eng and Tech - 2328",
								'Mahendra' => "Mahendra Engineering College[Autono]",
								'Mahendra1' => "Mahendra Institute of Eng and Technology - 2665",
								'MAHENDRA2' => "2632 - Mahendra Institute of Technology",
								'Mahendra3' => "2623 - Mahendra College of Eng",
								'Mahendra4' => "2638 - Mahendra Eng College for Women",
								'muthayammal1' => "2314 Muthayammal College of Engineering",
								'Muthayammal2'=> "Muthayammal Engineering College - Autono",
								'Narasu' => "Narasu's Sarathy Institute of Technology",
								'PAAVAI' => "Paavai Eng College - Autono",
								'paavai1' => "Paavai college of engineering",
								'PAAVAI2' => "Paavai college of technology",
								'IRTT' => "Institute of Road & Transport Technology",
								'Sengunthar1' => "Sengunthar College of Engineering - 2629",
								'sengunthar2' => "Sengunthar Eng College - 2617",
								'SONA' => "Sona College of Technology",
								'vidyaavikaas' => "VIDYAA VIKAS COLLEGE OF ENGINEERING AND TECHNOLOGY",
								'Vivekanandha1' => "Vivekanandha college of engineering for Women[Autono]",
								'Vivekanandha2' => "Vivekanandha college of technology for Women",
								'ANNAPOORNA' => '2648-ANNAPOORANA ENGINEERING COLLEGE',
								'CHETTINAD' => '2630-CHETTINAD COLLEGE OF ENGINEERING AND TECHNOLOGY',
								'NAGARATHINAM' => '2662-DR.NAGARATHINAM\'S COLLEGE OF ENGINEERING',
								'GANESH' => '2341-GANESH COLLEGE OF ENGINEERING',
								'GNANAMANI' => '2660-GNANAMANI COLLEGE OF ENGINEERING',
								'KING' => '2631 - King College of Technology',
								'VELALAR'=>'2723 - velalar college of engineering and technology',
								'VETRI' => '3850 - Vetri Vinayaga College of Engineering and Technology',
								'GNANAMANI1' => '2624 - GNANAMANI COLLEGE OF TECHNOLOGY',
								'JJKMUNIRAJAH' => '2758 - J K K MUNIRAJAH COLLEGE OF TECHNOLOGY',
								'TAGORE' => '2646 - Tagore Institute of Engineering and Technology',
								'DHANALAKSHMI' => 'Dhanalakshmi Srinivasan Institute of Technology',
								'JJKNATTRAJA'=>'2647-J.K.K. NATTRAJA COLLEGE OF ENGINEERING AND TECHNOLOGY',
								'M_KUMARASAMY' =>'2608-M.KUMARASAMY COLLEGE OF ENGINEERING',
								'M_P_NACHIMUTHU' =>'2713-M.P. NACHIMUTHU M. JAGANATHAN ENGINEERING COLLEGE',
								'PGP' =>'pgp college of engineering and technology',
								'JJKNATTRAJA'=>'2647-J.K.K. NATTRAJA COLLEGE OF ENGINEERING AND TECHNOLOGY',
								'SALEM_COLLEGE' => '2659-SALEM COLLEGE OF ENGINEERING AND TECHNOLOGY',
								'SELVAM' => '2627-SELVAM COLLEGE OF TECHNOLOGY',
								'SPECTRUM' => '2371-SPECTRUM COLLEGE OF TECHNOLOGY',
								'SSM' => '2614-S.S.M. COLLEGE OF ENGINEERING',
								'JJKNATTRAJA'=>'2647-J.K.K. NATTRAJA COLLEGE OF ENGINEERING AND TECHNOLOGY',
								'SRG' => '2767-SRG ENGINEERING COLLEGE',
								'M_KUMARASAMY' => '2608-M.KUMARASAMY COLLEGE OF ENGINEERING',
								'SRS' => '2663-S R S COLLEGE OF ENGINEERING AND TECHNOLOGY'
							);
		return $college_slugs_names[$slug];
	}

	function get_department_name($slug){
		$department_slugs_names  = array('automobile_ex_department' => "Auto Mobile Ex - Service",
										 'automobile_department' => "Auto Mobile",
										 "civil_department" => "Civil",
										 "cse_department" => "CSE",
										 "ece_department" => "ECE",
										 "eee_department" => "EEE",
										 "it_department" => "IT",
										 "it_ex_department" => "IT Ex - Service",
										 "mech_department" => "Mech",
										 "grand_total" => "Grand Total",
										 "fashion_department" => "Fashion",
										 "civil_ex_department" => "Civil Ex - Service",
										 "ece_ex_department" => "ECE Ex - Service",
										 "medical_department" => "Medical Electronics",
										 "bio_department" => "Bio Tech",
										 "aero_department" => "Aeronautics",
										 "agri_department" => "Agriculture Department",
										 "chemical_department" => "Chemical",
										 "mechatronics_department" => "Mechatronics",
										 "eandi_department" => "E&I",
										 "mechandauto_department" => "Mech and Auto",
										 "bio_tech_department" => "Bio Tech",
										 "food_department" => "Food Tech",
										 "nano_department" => "NANO Tech",
										 "textile_department" => "Textile",
										 "bio_medical_department" => "Bio Medical",
										 "et_department" => "Electronics and Technology",
										 "petrochemical_department" => "Petro Chemical",
										 "petro_chemical_department" => "Petro Chemical",
										 "petroleum_department" => "Petroleum Science",
										 "mech_ex_department" => "Mechanical Department Ex - Service",
										 "cse_ex_department" => "CSE - EX",
										 "textile_chemistry" => "Textile Chemistry",
										 "textile_technology" => "Textile Technology",
										 "petroleum_eng_department" => "Petroleum Engineering"
										 );
		return $department_slugs_names[$slug];
	}