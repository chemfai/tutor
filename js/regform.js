var app = angular.module("regform", ['ngAnimate', 'ngMessages', 'ngSanitize']);

app.controller("regCtrl", function($scope) {
    $scope.step = 1;
    $scope.formData = {};
	$scope.formData.mainLang = {};
	$scope.someSelected = function (object) {
		return Object.keys(object).some(function (key) {
			return object[key];
		});
	}
	$scope.errMsg = {};
	$scope.validateField = {
		1: ['reg_email', 'reg_eng_name', 'reg_chi_name', 'reg_gender', 'reg_birthday', 'reg_nationality', 'reg_mainlang'],
		2: ['reg_address', 'reg_district', 'reg_residental', 'reg_contact_number', 'reg_alternate_email'],
		3: ['reg_contact_person', 'reg_contact_person_number', 'reg_contact_person_rel'],
		4: ['reg_occupation', 'reg_work_exp', 'reg_work_info', 'reg_tutorial_exp', 'reg_edu_institutions_exp', 'reg_highest_grade_teach', 'reg_provide_note'],
		5: ['reg_highest_grade', 'reg_primary_school', 'reg_secondary_school', 'reg_university', 'reg_other_university', 'reg_uni_major', 'reg_uni_minor', 'reg_current_grade', 'reg_hkcee_mark', 'reg_hkcee_lang'],
	}
	$scope.next = function(){
		var d = $scope.tutor_reg;
		var fields = $scope.validateField[$scope.step];
		var error = 0;
		angular.forEach(fields, function(value, key) {
			var field = d[value];
			if(field.$invalid){
				$scope['errMsg'][value] = true;
				error++;
			}else{
				$scope['errMsg'][value] = false;
			}
		})
		console.log($scope['errMsg']);
		if(error == 0) $scope.step++;
	}
	$( ".birth-datepicker" ).datepicker({
		changeMonth: true,
		changeYear: true,
		maxDate: '0',
		yearRange: "-100:+0",
		dateFormat: "yy-mm-dd",
		onSelect: function(dateText, inst) {
            $scope.$apply(function() {
	            //var date = $.datepicker.parseDate(inst.settings.dateFormat || $.datepicker._defaults.dateFormat, dateText, inst.settings);
                //$scope.reg_birthday = $.datepicker.formatDate("yy-mm-dd", date);
                $scope.formData.reg_birthday = dateText;
            });
        }
	})
	$scope.subject = {};
	$scope.subject.staroption = [
	    {value: 5,text: 'A/5*'},
	    {value: 4,text: 'B/5'},
	    {value: 3,text: 'C/4'},
	    {value: 2,text: 'D/3'},
	    {value: 1,text: 'E/2'},
	];
	$scope.subject.option = [
	    {value: 5,text: 'A'},
	    {value: 4,text: 'B'},
	    {value: 3,text: 'C'},
	    {value: 2,text: 'D'},
	    {value: 1,text: 'E'},
	];
	$scope.subject.dseoption = [
	    {value: 7,text: '5**'},
	    {value: 6,text: '5*'},
	    {value: 5,text: '5'},
	    {value: 4,text: '4'},
	    {value: 3,text: '3'},
	    {value: 2,text: '2'},
	    {value: 1,text: '1'},
	];
	$scope.subject.hkcee = {
		major:{
			'reg_hkcee_chi': {label:'中國語文', option: $scope.subject.staroption},
			'reg_hkcee_eng': {label:'英國語文', option: $scope.subject.staroption},
			'reg_hkcee_maths': {label:'數學', option: $scope.subject.option}
		},
		liberalarts:{
			'reg_hkcee_chilit': {label:'中國文學', option: $scope.subject.option},
			'reg_hkcee_englit': {label:'英國文學', option: $scope.subject.option},
			'reg_hkcee_chihis': {label:'中國歷史', option: $scope.subject.option},
			'reg_hkcee_his': {label:'世界歷史', option: $scope.subject.option},
			'reg_hkcee_geog': {label:'地理', option: $scope.subject.option},
			'reg_hkcee_music': {label:'音樂', option: $scope.subject.option},
		},
		sciences:{
			'reg_hkcee_amaths': {label:'附加數學', option: $scope.subject.option},
			'reg_hkcee_phy': {label:'物理', option: $scope.subject.option},
			'reg_hkcee_bio': {label:'生物', option: $scope.subject.option},
			'reg_hkcee_chem': {label:'化學', option: $scope.subject.option}
		},
		business:{
			'reg_hkcee_commerce': {label:'商業學', option: $scope.subject.option},
			'reg_hkcee_acc': {label:'會計學原理', option: $scope.subject.option},
			'reg_hkcee_econ': {label:'經濟', option: $scope.subject.option},
			'reg_hkcee_comp': {label:'電腦', option: $scope.subject.option},
			'reg_hkcee_typ': {label:'打字', option: $scope.subject.option},
			'reg_hkcee_putonghua': {label:'普通話', option: $scope.subject.option}
		}
	};
	$scope.subject.hkale = {
		major:{
			'reg_hkale_chi': {label:'中國語文', option: $scope.subject.option},
			'reg_hkale_eng': {label:'英國語文', option: $scope.subject.option},
			'reg_hkale_gen': {label:'通識教育', option: $scope.subject.option}
		},
		liberalarts:{
			'reg_hkale_chilit': {label:'中國文學', option: $scope.subject.option},
			'reg_hkale_englit': {label:'英國文學', option: $scope.subject.option},
			'reg_hkale_chihis': {label:'中國歷史', option: $scope.subject.option},
			'reg_hkale_his': {label:'世界歷史', option: $scope.subject.option},
			'reg_hkale_geog': {label:'地理', option: $scope.subject.option},
			'reg_hkale_music': {label:'音樂', option: $scope.subject.option},
		},
		sciences:{
			'reg_hkale_pmaths': {label:'純粹數學', option: $scope.subject.option},
			'reg_hkale_appmaths': {label:'應用數學', option: $scope.subject.option},
			'reg_hkale_phy': {label:'物理', option: $scope.subject.option},
			'reg_hkale_bio': {label:'生物', option: $scope.subject.option},
			'reg_hkale_chem': {label:'化學', option: $scope.subject.option},
		},
		business:{
			'reg_hkale_busi': {label:'企業概論', option: $scope.subject.option},
			'reg_hkale_acc': {label:'會計學原理', option: $scope.subject.option},
			'reg_hkale_econ': {label:'經濟', option: $scope.subject.option},
			'reg_hkale_comp': {label:'電腦應用', option: $scope.subject.option},
			'reg_hkale_gov': {label:'政府及公共事務', option: $scope.subject.option},
			'reg_hkale_stat': {label:'數學及統計學', option: $scope.subject.option},
			'reg_hkale_psyc': {label:'心理學', option: $scope.subject.option}
		}
	}
	$scope.subject.hkdse = {
		major:{
			'reg_hkdse_chi': {label:'中國語文', option: $scope.subject.dseoption},
			'reg_hkdse_eng': {label:'英國語文', option: $scope.subject.dseoption},
			'reg_hkdse_maths': {label:'數學', option: $scope.subject.dseoption},
			'reg_hkdse_gen': {label:'通識教育', option: $scope.subject.dseoption}
		},
		minor:{
			'reg_hkdse_chilit': {label:'中國文學', option: $scope.subject.dseoption},
			'reg_hkdse_englit': {label:'英國文學', option: $scope.subject.dseoption},
			'reg_hkdse_mathsm1': {label:'數學(M1)', option: $scope.subject.dseoption},
			'reg_hkdse_mathsm2': {label:'數學(M2)', option: $scope.subject.dseoption},
			'reg_hkdse_chihis': {label:'中國歷史', option: $scope.subject.dseoption},
			'reg_hkdse_econ': {label:'經濟', option: $scope.subject.dseoption},
			'reg_hkdse_reli': {label:'倫理與宗教', option: $scope.subject.dseoption},
			'reg_hkdse_geog': {label:'地理', option: $scope.subject.dseoption},
			'reg_hkdse_his': {label:'歷史', option: $scope.subject.dseoption},
			'reg_hkdse_tour': {label:'旅遊與款待', option: $scope.subject.dseoption},
			'reg_hkdse_bio': {label:'生物', option: $scope.subject.dseoption},
			'reg_hkdse_chem': {label:'化學', option: $scope.subject.dseoption},
			'reg_hkdse_phy': {label:'物理', option: $scope.subject.dseoption},
			'reg_hkdse_science1': {label:'科學:組合科學', option: $scope.subject.dseoption},
			'reg_hkdse_science2': {label:'科學:綜合科學', option: $scope.subject.dseoption},
			'reg_hkdse_infoTech': {label:'資訊及通訊科技', option: $scope.subject.dseoption},
			'reg_hkdse_sciLife': {label:'科技與生活', option: $scope.subject.dseoption},
			'reg_hkdse_design': {label:'設計與應用科技', option: $scope.subject.dseoption},
			'reg_hkdse_visualArt': {label:'視覺藝術', option: $scope.subject.dseoption},
			'reg_hkdse_music': {label:'音樂', option: $scope.subject.dseoption},
			'reg_hkdse_sport': {label:'體育', option: $scope.subject.dseoption},
			'reg_hkdse_busi': {label:'企業,會計與財務概論', option: $scope.subject.dseoption},
			'reg_hkdse_manage': {label:'健康管理與社會關懷', option: $scope.subject.dseoption},
		},
		creative_learning:{
			'reg_hkdse_imgDesign': {label:'形象設計', option: $scope.subject.dseoption},
			'reg_hkdse_comicsDesign': {label:'商業漫畫設計', option: $scope.subject.dseoption},
			'reg_hkdse_prodDesign': {label:'創新產品設計', option: $scope.subject.dseoption},
			'reg_hkdse_multiMedia': {label:'多媒體科藝', option: $scope.subject.dseoption},
			'reg_hkdse_jewelDesign': {label:'珠寶藝術與設計', option: $scope.subject.dseoption},
			'reg_hkdse_drama': {label:'戲劇藝術入門', option: $scope.subject.dseoption},
			'reg_hkdse_dance': {label:'舞蹈藝術', option: $scope.subject.dseoption},
		},
		media:{
			'reg_hkdse_movie': {label:'電影及錄像', option: $scope.subject.dseoption},
			'reg_hkdse_radio': {label:'電台主持與節目製作', option: $scope.subject.dseoption},
			'reg_hkdse_entertain': {label:'資訊娛樂節目製作', option: $scope.subject.dseoption},
			'reg_hkdse_advert': {label:'公關及廣告', option: $scope.subject.dseoption},
		},
		business_management_law:{
			'reg_hkdse_marketExpan': {label:'國際商貿市場拓展', option: $scope.subject.dseoption},
			'reg_hkdse_purchase': {label:'採購及營銷', option: $scope.subject.dseoption},
			'reg_hkdse_busiAcc': {label:'中小企實用電腦會計', option: $scope.subject.dseoption},
			'reg_hkdse_retail': {label:'零售管理', option: $scope.subject.dseoption},
			'reg_hkdse_finance': {label:'認識金融服務', option: $scope.subject.dseoption},
			'reg_hkdse_law': {label:'認識香港法律', option: $scope.subject.dseoption},
		},
		service:{
			'reg_hkdse_hotelService': {label:'酒店服務營運', option: $scope.subject.dseoption},
			'reg_hkdse_plan': {label:'項目策劃及運作', option: $scope.subject.dseoption},
			'reg_hkdse_hotel': {label:'酒店營運', option: $scope.subject.dseoption},
			'reg_hkdse_chlid': {label:'幼兒成長教育', option: $scope.subject.dseoption},
			'reg_hkdse_food': {label:'西式食品製作', option: $scope.subject.dseoption},
			'reg_hkdse_beauty': {label:'美容學基礎', option: $scope.subject.dseoption},
		},
		science:{
			'reg_hkdse_health': {label:'基礎健康護理', option: $scope.subject.dseoption},
			'reg_hkdse_laboratory': {label:'醫務化驗科學', option: $scope.subject.dseoption},
			'reg_hkdse_coach': {label:'運動管理與教練法', option: $scope.subject.dseoption},
			'reg_hkdse_chiBeauty': {label:'中醫保健與美容', option: $scope.subject.dseoption},
			'reg_hkdse_psyc': {label:'應用心理學', option: $scope.subject.dseoption},
			'reg_hkdse_nursing': {label:'健康護理實務', option: $scope.subject.dseoption},
			'reg_hkdse_sportScience': {label:'運動科學及體適能', option: $scope.subject.dseoption},
		},
		engineering:{
			'reg_hkdse_car': {label:'汽車科技', option: $scope.subject.dseoption},
			'reg_hkdse_house': {label:'屋宇設施工程', option: $scope.subject.dseoption},
			'reg_hkdse_environ': {label:'環境工程', option: $scope.subject.dseoption},
			'reg_hkdse_elec': {label:'電子產品設計實務', option: $scope.subject.dseoption},
			'reg_hkdse_aero': {label:'航空學', option: $scope.subject.dseoption},
		},
		lang:{
			'reg_hkdse_french': {label:'法語', option: $scope.subject.dseoption},
			'reg_hkdse_japanese': {label:'日語', option: $scope.subject.dseoption},
			'reg_hkdse_german': {label:'德語', option: $scope.subject.dseoption},
			'reg_hkdse_spanish': {label:'西班牙語', option: $scope.subject.dseoption},
			'reg_hkdse_indian': {label:'印地語', option: $scope.subject.dseoption},
			'reg_hkdse_urdu': {label:'烏爾都語', option: $scope.subject.dseoption},
		}
	}
	$scope.hkcee_expanded = true;
	$scope.hkale_expanded = false;
	$scope.hkdse_expanded = false;
	//ready
	angular.element(function () {
		//angular.element(elem.querySelector('.classname'))
        $('.slideDown').show();
    });
})
.animation('.slideDown', function() {
	return {
		addClass: function(element, className, done) {
            $(element).slideDown(500, done);
            $('.opened').trigger('click');
		},
		removeClass: function(element, className, done) {
			$(element).slideUp(500, done);
		}
	}
})
$(function(){
	
})