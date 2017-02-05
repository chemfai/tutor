
		<div id="tm-content" class="p-register">
			<div class="section-container">
				<div class="section-head"><div><h3>新導師登記</h3></div></div>
				<div class="section-c">
					<script type="text/javascript" src="<?=$wwwroot?>/js/regform.js" defer></script>
					<div class="reg-form" ng-app="regform" ng-controller="regCtrl">
						<form method="post" name="tutor_reg" novalidate>
							<div class="reg-step" ng-show="step == 1">
								<h5>個人資料</h5>
								<div class="row">
									<div class="field-label"><label for="reg_email">電子郵件地址<span>*</span></label></div>
									<div class="field-input">
										<input type="email" class="textfield" name="reg_email" id="reg_email" ng-model="formData.reg_email" required>
										<div class="ps">(你的電郵地址會作為登入名稱)</div>
										<div class="error-msg" ng-messages="tutor_reg.reg_email.$error" ng-if='tutor_reg.reg_email.$touched || errMsg.reg_email'>
											<div ng-message="required">請輸入你的電郵地址</div>
											<div ng-message="email">請輸入有效的電郵地址</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="field-label"><label for="reg_eng_name">英文名稱<span class="np">（非公開）</span><span>*</span></label></div>
									<div class="field-input">
										<input type="text" class="textfield" name="reg_eng_name" id="reg_eng_name" ng-model="formData.reg_eng_name" required>
										<div class="error-msg" ng-messages="tutor_reg.reg_eng_name.$error" ng-if='tutor_reg.reg_eng_name.$touched || errMsg.reg_eng_name'>
											<div ng-message="required">請輸入你的英文名稱</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="field-label"><label for="reg_nickname">暱稱或英文名</label></div>
									<div class="field-input">
										<input type="text" class="textfield" name="reg_nickname" id="reg_nickname" ng-model="formData.reg_nickname">
									</div>
								</div>
								<div class="row">
									<div class="field-label"><label for="reg_chi_name">中文名稱<span class="np">（非公開）</span><span>*</span></label></div>
									<div class="field-input">
										<input type="text" class="textfield" name="reg_chi_name" id="reg_chi_name" ng-model="formData.reg_chi_name" required>
										<div class="error-msg" ng-messages="tutor_reg.reg_chi_name.$error" ng-if='tutor_reg.reg_chi_name.$touched || errMsg.reg_chi_name'>
											<div ng-message="required">請輸入你的中文名稱</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="field-label"><label for="reg_gender">性別<span>*</span></label></div>
									<div class="field-input">
										<input type="radio" name="reg_gender" id="reg_gender_m" value="m" ng-model="formData.reg_gender" required>
										<label class="fakebox" for="reg_gender_m">
											<svg x="0px" y="0px" viewBox="0 0 83.1 65.5" enable-background="new 0 0 83.1 65.5" xml:space="preserve">
											<polyline points="6.4,28.4 25.6,53.7 77.7,5.9 "/>
											</svg>
										</label>
										<span class="option-caption">男</span>
										<input type="radio" name="reg_gender" id="reg_gender_f" value="f" ng-model="formData.reg_gender" required>
										<label class="fakebox" for="reg_gender_f">
											<svg x="0px" y="0px" viewBox="0 0 83.1 65.5" enable-background="new 0 0 83.1 65.5" xml:space="preserve">
											<polyline points="6.4,28.4 25.6,53.7 77.7,5.9 "/>
											</svg>
										</label>
										<span class="option-caption">女</span>
										<div class="error-msg" ng-messages="tutor_reg.reg_gender.$error" ng-if='errMsg.reg_gender'>
											<div ng-message="required">請輸入你的性別</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="field-label"><label for="reg_birthday">出生日期<span>*</span></label></div>
									<div class="field-input">
										<input type="text" class="textfield birth-datepicker" name="reg_birthday" id="reg_birthday" ng-model="formData.reg_birthday" required readonly>
										<div class="error-msg" ng-messages="tutor_reg.reg_birthday.$error" ng-if='tutor_reg.reg_birthday.$touched || errMsg.reg_birthday'>
											<div ng-message="required">請輸入你的出生日期</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="field-label"><label for="reg_nationality">國籍<span>*</span></label></div>
									<div class="field-input">
										<input type="text" class="textfield" name="reg_nationality" id="reg_nationality" ng-model="formData.reg_nationality" required>
										<div class="error-msg" ng-messages="tutor_reg.reg_nationality.$error" ng-if='tutor_reg.reg_nationality.$touched || errMsg.reg_nationality'>
											<div ng-message="required">請輸入你的國籍</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="field-label"><label for="reg_mainlang">主要語言<span>*</span></label></div>
									<div class="field-input">
										<input type="checkbox" name="reg_mainlang" id="reg_mainlang_cantonese" ng-model="formData.mainLang[1]" value="cantonese" ng-required="!someSelected(formData.mainLang)">
										<label class="fakebox" for="reg_mainlang_cantonese">
											<svg x="0px" y="0px" viewBox="0 0 83.1 65.5" enable-background="new 0 0 83.1 65.5" xml:space="preserve">
											<polyline points="6.4,28.4 25.6,53.7 77.7,5.9 "/>
											</svg>
										</label>
										<span class="option-caption">粵語</span>
										<input type="checkbox" name="reg_mainlang" id="reg_mainlang_mandarin" ng-model="formData.mainLang[2]" value="mandarin" ng-required="!someSelected(formData.mainLang)">
										<label class="fakebox" for="reg_mainlang_mandarin">
											<svg x="0px" y="0px" viewBox="0 0 83.1 65.5" enable-background="new 0 0 83.1 65.5" xml:space="preserve">
											<polyline points="6.4,28.4 25.6,53.7 77.7,5.9 "/>
											</svg>
										</label>
										<span class="option-caption">普通話</span>
										<input type="checkbox" name="reg_mainlang" id="reg_mainlang_english" ng-model="formData.mainLang[3]" value="english" ng-required="!someSelected(formData.mainLang)">
										<label class="fakebox" for="reg_mainlang_english">
											<svg x="0px" y="0px" viewBox="0 0 83.1 65.5" enable-background="new 0 0 83.1 65.5" xml:space="preserve">
											<polyline points="6.4,28.4 25.6,53.7 77.7,5.9 "/>
											</svg>
										</label>
										<span class="option-caption">英語</span>
										<div class="error-msg" ng-messages="tutor_reg.reg_mainlang.$error" ng-if='tutor_reg.reg_mainlang.$dirty || errMsg.reg_mainlang'>
											<div ng-message="required">請輸入你的主要語言</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="field-label"><label for="reg_religion">宗教信仰</label></div>
									<div class="field-input">
										<input type="text" class="textfield" name="reg_religion" id="reg_religion" ng-model="formData.reg_religion">
									</div>
								</div>
							</div>
							<div class="reg-step" ng-show="step == 2">
								<h5>聯繫資料</h5>
								<div class="row">
									<div class="field-label"><label for="reg_address">固定住宅地址<span class="np">（非公開）</span><span>*</span></label></div>
									<div class="field-input">
										<textarea class="textfield" name="reg_address" id="reg_address" ng-model="formData.reg_address" required></textarea>
										<div class="error-msg" ng-messages="tutor_reg.reg_address.$error" ng-if='tutor_reg.reg_address.$touched || errMsg.reg_address'>
											<div ng-message="required">請輸入你的固定住宅地址</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="field-label"><label for="reg_district">住址區域<span class="np">（非公開）</span><span>*</span></label></div>
									<div class="field-input">
										<div class="style-select">
											<select name="reg_district" id="reg_district" ng-model="formData.reg_district" required>
												<option value="">請選擇</option>
						                        <optgroup label="香港島">
													<option value="中半山">中半山</option>
													<option value="薄扶林">薄扶林</option>
													<option value="中上環">中上環</option>
													<option value="西環">西環</option>
													<option value="灣仔">灣仔</option>
													<option value="銅鑼灣">銅鑼灣</option>
													<option value="跑馬地">跑馬地</option>
													<option value="北角">北角</option>
													<option value="則魚涌">則魚涌</option>
													<option value="太古">太古</option>
													<option value="筲箕灣">筲箕灣</option>
													<option value="西灣河">西灣河</option>
													<option value="柴灣">柴灣</option>
													<option value="小西灣">小西灣</option>
													<option value="香港仔">香港仔</option>
													<option value="鴨利洲">鴨利洲</option>
													<option value="赤柱">赤柱</option>
						                        </optgroup>
						                        <optgroup label="九龍區">
													<option value="藍田">藍田</option>
													<option value="油塘">油塘</option>
													<option value="秀茂坪">秀茂坪</option>
													<option value="觀塘">觀塘</option>
													<option value="牛頭角">牛頭角</option>
													<option value="九龍灣">九龍灣</option>
													<option value="彩虹">彩虹</option>
													<option value="牛池灣">牛池灣</option>
													<option value="慈雲山">慈雲山</option>
													<option value="鑽石山">鑽石山</option>
													<option value="新蒲崗">新蒲崗</option>
													<option value="黃大仙">黃大仙</option>
													<option value="樂富">樂富</option>
													<option value="九龍塘">九龍塘</option>
													<option value="石硤尾">石硤尾</option>
													<option value="何文田">何文田</option>
													<option value="九龍城">九龍城</option>
													<option value="土瓜灣">土瓜灣</option>
													<option value="紅磡">紅磡</option>
													<option value="油麻地">油麻地</option>
													<option value="佐敦">佐敦</option>
													<option value="尖沙咀">尖沙咀</option>
													<option value="旺角">旺角</option>
													<option value="大角咀">大角咀</option>
													<option value="深水步">深水步</option>
													<option value="長沙灣">長沙灣</option>
													<option value="荔枝角">荔枝角</option>
													<option value="美孚">美孚</option>
						                        </optgroup>
						                        <optgroup label="新界區">
													<option value="將軍澳">將軍澳</option>
													<option value="西貢">西貢</option>
													<option value="荃灣">荃灣</option>
													<option value="深井">深井</option>
													<option value="馬灣">馬灣</option>
													<option value="葵涌">葵涌</option>
													<option value="葵芳">葵芳</option>
													<option value="青衣">青衣</option>
													<option value="大圍">大圍</option>
													<option value="沙田">沙田</option>
													<option value="沙田市中心">沙田市中心</option>
													<option value="小瀝源">小瀝源</option>
													<option value="火炭">火炭</option>
													<option value="馬鞍山">馬鞍山</option>
													<option value="大埔">大埔</option>
													<option value="粉嶺">粉嶺</option>
													<option value="上水">上水</option>
													<option value="元朗">元朗</option>
													<option value="天水圍">天水圍</option>
													<option value="屯門">屯門</option>
													<option value="離島">離島(除東涌)</option>
													<option value="東涌">東涌</option>
						                        </optgroup>
											</select>
										</div>
										<div class="error-msg" ng-messages="tutor_reg.reg_district.$error" ng-if='tutor_reg.reg_district.$touched || errMsg.reg_district'>
											<div ng-message="required">請輸入你的住址區域</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="field-label"><label for="reg_hostel_address">學校宿舍地址<span class="np">（非公開）</span></label></div>
									<div class="field-input">
										<textarea class="textfield" name="reg_hostel_address" id="reg_hostel_address" ng-model="formData.reg_hostel_address"></textarea>
										<div class="ps">（如有）</div>
									</div>
								</div>
								<div class="row">
									<div class="field-label"><label for="reg_residental">現居住地點<span class="np">（非公開）</span><span>*</span></label></div>
									<div class="field-input">
										<input type="radio" name="reg_residental" id="reg_residental_apartment" value="住宅" ng-model="formData.reg_residental" required>
										<label class="fakebox" for="reg_residental_apartment">
											<svg x="0px" y="0px" viewBox="0 0 83.1 65.5" enable-background="new 0 0 83.1 65.5" xml:space="preserve">
											<polyline points="6.4,28.4 25.6,53.7 77.7,5.9 "/>
											</svg>
										</label>
										<span class="option-caption">住宅</span>
										<input type="radio" name="reg_residental" id="reg_residental_hostel" value="學校宿舍" ng-model="formData.reg_residental" required>
										<label class="fakebox" for="reg_residental_hostel">
											<svg x="0px" y="0px" viewBox="0 0 83.1 65.5" enable-background="new 0 0 83.1 65.5" xml:space="preserve">
											<polyline points="6.4,28.4 25.6,53.7 77.7,5.9 "/>
											</svg>
										</label>
										<span class="option-caption">學校宿舍</span>
										<div class="error-msg" ng-messages="tutor_reg.reg_residental.$error" ng-if='errMsg.reg_residental'>
											<div ng-message="required">請輸入你的現居住地點</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="field-label"><label for="reg_contact_number">聯絡電話<span class="np">（非公開）</span><span>*</span></label></div>
									<div class="field-input">
										<input type="number" class="textfield" name="reg_contact_number" id="reg_contact_number" ng-model="formData.reg_contact_number" ng-minlength="8" ng-maxlength="8" required>
										<div class="ps">請輸入8位數字香港電話</div>
										<div class="error-msg" ng-messages="tutor_reg.reg_contact_number.$error" ng-if='tutor_reg.reg_contact_number.$touched || errMsg.reg_contact_number'>
											<div ng-message="minlength maxlength number">請輸入有效的聯絡電話</div>
											<div ng-message="required">請輸入你的聯絡電話</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="field-label"><label for="reg_alternate_email">備用電郵</label></div>
									<div class="field-input">
										<input type="email" class="textfield" name="reg_alternate_email" id="reg_alternate_email" ng-model="formData.reg_alternate_email" ng-required="formData.reg_alternate_email">
										<div class="error-msg" ng-messages="tutor_reg.reg_alternate_email.$error" ng-if='tutor_reg.reg_alternate_email.$touched || errMsg.reg_alternate_email'>
											<div ng-message="email">請輸入有效的備用電郵</div>
										</div>
									</div>
								</div>
							</div>
							<div class="reg-step" ng-show="step == 3">
								<h5>聯繫資料</h5>
								<div class="row">
									<div class="field-label"><label for="reg_contact_person">聯絡人姓名</label></div>
									<div class="field-input">
										<input type="text" class="textfield" name="reg_contact_person" id="reg_contact_person" ng-model="formData.reg_contact_person" ng-required="formData.reg_contact_person_number">
										<div class="error-msg" ng-messages="tutor_reg.reg_contact_person.$error" ng-if='tutor_reg.reg_contact_person.$touched || errMsg.reg_contact_person'>
											<div ng-message="required">請輸入你的聯絡人姓名</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="field-label"><label for="reg_contact_person_number">聯絡人電話</label></div>
									<div class="field-input">
										<input type="number" class="textfield" name="reg_contact_person_number" id="reg_contact_person_number" ng-model="formData.reg_contact_person_number" ng-minlength="8" ng-maxlength="8" ng-required="formData.reg_contact_person">
										<div class="ps">請輸入8位數字香港電話</div>
										<div class="error-msg" ng-messages="tutor_reg.reg_contact_person_number.$error" ng-if='tutor_reg.reg_contact_person_number.$touched || errMsg.reg_contact_person_number'>
											<div ng-message="minlength maxlength number">請輸入有效的聯絡電話</div>
											<div ng-message="required">請輸入你的聯絡人電話</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="field-label"><label for="reg_contact_person_rel">聯絡人與會員之關係</label></div>
									<div class="field-input">
										<div class="style-select">
											<select name="reg_contact_person_rel" id="reg_contact_person_rel" ng-model="formData.reg_contact_person_rel" ng-required="formData.reg_contact_person">
												<option value="">請選擇</option>
												<option value="自己">自己</option>
												<option value="母親">母親</option>
												<option value="父親">父親</option>
												<option value="哥哥">哥哥</option>
												<option value="姐姐">姐姐</option>
												<option value="家人">家人</option>
												<option value="朋友">朋友</option>
												<option value="其他">其他</option>
											</select>
										</div>
										<div class="error-msg" ng-messages="tutor_reg.reg_contact_person_rel.$error" ng-if='tutor_reg.reg_contact_person_rel.$touched || errMsg.reg_contact_person_rel'>
											<div ng-message="required">請輸入你的聯絡人與會員之關係</div>
										</div>
									</div>
								</div>
							</div>
							<div class="reg-step" ng-show="step == 4">
								<h5>職業履歷資料</h5>
								<div class="row">
									<div class="field-label"><label for="reg_occupation">現時職業<span>*</span></label></div>
									<div class="field-input">
										<div class="style-select">
											<select name="reg_occupation" id="reg_occupation" ng-model="formData.reg_occupation" required>
						                    	<option value="">請選擇</option>
						                        <option value="學生">學生</option>
						                        <option value="現職小學教師">現職小學教師</option>
						                        <option value="現職中學教師">現職中學教師</option>
						                        <option value="全職補習導師">全職補習導師</option>
						                        <option value="幼稚園導師">幼稚園導師</option>
						                        <option value="外國回流導師">外國回流導師</option>
						                        <option value="退休老師">退休老師</option>
						                        <option value="現職大學教授">現職大學教授</option>
						                        <option value="教育機構老師">教育機構老師</option>
						                        <option value="其他職業">其他職業</option>
						                        <option value="無業">無業</option>
											</select>
										</div>
										<div class="error-msg" ng-messages="tutor_reg.reg_occupation.$error" ng-if='tutor_reg.reg_occupation.$touched || errMsg.reg_occupation'>
											<div ng-message="required">請輸入你的現時職業</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="field-label"><label for="reg_work_exp">工作經驗<span>*</span></label></div>
									<div class="field-input">
										<div class="style-select">
											<select name="reg_work_exp" id="reg_work_exp" ng-model="formData.reg_work_exp" required>
						                    	<option value="">請選擇</option>
						                        <option value="一年">一年</option>
						                        <option value="二年">二年</option>
						                        <option value="三年">三年</option>
						                        <option value="四年">四年</option>
						                        <option value="五年或以上">五年或以上</option>
						                        <option value="只做過暑期工">只做過暑期工</option>
						                        <option value="無工作經驗">無工作經驗</option>
											</select>
										</div>
										<div class="error-msg" ng-messages="tutor_reg.reg_work_exp.$error" ng-if='tutor_reg.reg_work_exp.$touched || errMsg.reg_work_exp'>
											<div ng-message="required">請輸入你的工作經驗</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="field-label"><label for="reg_work_info">過去工作資料<span>*</span></label></div>
									<div class="field-input">
										<textarea class="textfield" name="reg_work_info" id="reg_work_info" ng-model="formData.reg_work_info" required></textarea>
										<div class="error-msg" ng-messages="tutor_reg.reg_work_info.$error" ng-if='tutor_reg.reg_work_info.$touched || errMsg.reg_work_info'>
											<div ng-message="required">請輸入你的過去工作資料</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="field-label"><label for="reg_tutorial_exp">補習經驗及年資<span>*</span></label></div>
									<div class="field-input">
										<div class="style-select">
											<select name="reg_tutorial_exp" id="reg_tutorial_exp" ng-model="formData.reg_tutorial_exp" required>
												<option value="">請選擇</option>
						                    	<option value="無補習經驗">沒有補習經驗</option>
						                        <option value="一年">一年</option>
						                        <option value="兩年">兩年</option>
						                        <option value="三年">三年</option>
						                        <option value="四年">四年</option>
						                        <option value="五年或以上">五年或以上</option>
											</select>
										</div>
										<div class="error-msg" ng-messages="tutor_reg.reg_tutorial_exp.$error" ng-if='tutor_reg.reg_tutorial_exp.$touched || errMsg.reg_tutorial_exp'>
											<div ng-message="required">請輸入你的補習經驗及年資</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="field-label"><label for="reg_edu_institutions_exp">教育機構經驗<span>*</span></label></div>
									<div class="field-input">
										<div class="style-select">
											<select name="reg_edu_institutions_exp" id="reg_edu_institutions_exp" ng-model="formData.reg_edu_institutions_exp" required>
						                    	<option value="">請選擇</option>
						                        <option value="曾在補習社工作">曾在補習社工作</option>
						                        <option value="曾在托管中心工作">曾在托管中心工作</option>
						                        <option value="曾在學校當輔導生">曾在學校當輔導生</option>
						                        <option value="沒有這方面經驗">沒有這方面經驗</option>
											</select>
										</div>
										<div class="error-msg" ng-messages="tutor_reg.reg_edu_institutions_exp.$error" ng-if='tutor_reg.reg_edu_institutions_exp.$touched || errMsg.reg_edu_institutions_exp'>
											<div ng-message="required">請輸入你的教育機構經驗</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="field-label"><label for="reg_highest_grade_teach">最高可補年級<span>*</span></label></div>
									<div class="field-input">
										<div class="style-select">
											<select name="reg_highest_grade_teach" id="reg_highest_grade_teach" ng-model="formData.reg_highest_grade_teach" required>
						                    	<option value="">請選擇</option>
						                        <option value="小一">小一</option>
						                        <option value="小二">小二</option>
						                        <option value="小三">小三</option>
						                        <option value="小四">小四</option>
						                        <option value="小五">小五</option>
						                        <option value="小六">小六</option>
						                        <option value="中一">中一</option>
						                        <option value="中二">中二</option>
						                        <option value="中三">中三</option>
						                        <option value="中四">中四</option>
						                        <option value="中五">中五</option>
						                        <option value="中六">中六</option>
						                        <option value="中七">中七</option>
						                        <option value="大專">大專</option>
											</select>
										</div>
										<div class="error-msg" ng-messages="tutor_reg.reg_highest_grade_teach.$error" ng-if='tutor_reg.reg_highest_grade_teach.$touched || errMsg.reg_highest_grade_teach'>
											<div ng-message="required">請輸入你的最高可補年級</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="field-label"><label for="reg_provide_note">是否有筆記提供<span>*</span></label></div>
									<div class="field-input">
										<input type="radio" name="reg_provide_note" id="reg_reg_provide_note_y" value="y" ng-model="formData.reg_provide_note" required>
										<label class="fakebox" for="reg_reg_provide_note_y">
											<svg x="0px" y="0px" viewBox="0 0 83.1 65.5" enable-background="new 0 0 83.1 65.5" xml:space="preserve">
											<polyline points="6.4,28.4 25.6,53.7 77.7,5.9 "/>
											</svg>
										</label>
										<span class="option-caption">是</span>
										<input type="radio" name="reg_provide_note" id="reg_reg_provide_note_n" value="n" ng-model="formData.reg_provide_note" required>
										<label class="fakebox" for="reg_reg_provide_note_n">
											<svg x="0px" y="0px" viewBox="0 0 83.1 65.5" enable-background="new 0 0 83.1 65.5" xml:space="preserve">
											<polyline points="6.4,28.4 25.6,53.7 77.7,5.9 "/>
											</svg>
										</label>
										<span class="option-caption">否</span>
										<div class="error-msg" ng-messages="tutor_reg.reg_provide_note.$error" ng-if='errMsg.reg_provide_note'>
											<div ng-message="required">請輸入是否有筆記提供</div>
										</div>
									</div>
								</div>
							</div>
							<div class="reg-step" ng-show="step == 5">
								<h5>學業履歷</h5>
								<div class="row">
									<div class="field-label"><label for="reg_highest_grade">最高教育程度<span>*</span></label></div>
									<div class="field-input">
										<div class="style-select">
											<select name="reg_highest_grade" id="reg_highest_grade" ng-model="formData.reg_highest_grade" required>
						                    	<option value="">請選擇</option>
						                        <option value="中五畢業">中五畢業</option>
						                        <option value="中七畢業">中七畢業</option>
						                        <option value="高中畢業 (DSE)">高中畢業 (DSE)</option>
						                        <option value="大學生(非學位)">大學生(非學位)</option>
						                        <option value="大學生(學位)">大學生(學位)</option>
						                        <option value="大學畢業">大學畢業</option>
						                        <option value="碩士學位">碩士學位</option>
						                        <option value="博士學位">博士學位</option>
											</select>
										</div>
										<div class="error-msg" ng-messages="tutor_reg.reg_highest_grade.$error" ng-if='tutor_reg.reg_highest_grade.$touched || errMsg.reg_highest_grade'>
											<div ng-message="required">請輸入你的最高教育程度</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="field-label"><label for="reg_primary_school">就讀小學<span>*</span></label></div>
									<div class="field-input">
										<input type="text" class="textfield" name="reg_primary_school" id="reg_primary_school" ng-model="formData.reg_primary_school" required>
										<div class="error-msg" ng-messages="tutor_reg.reg_primary_school.$error" ng-if='tutor_reg.reg_primary_school.$touched || errMsg.reg_primary_school'>
											<div ng-message="required">請輸入你的就讀小學</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="field-label"><label for="reg_secondary_school">就讀中學<span>*</span></label></div>
									<div class="field-input">
										<input type="text" class="textfield" name="reg_secondary_school" id="reg_secondary_school" ng-model="formData.reg_secondary_school" required>
										<div class="error-msg" ng-messages="tutor_reg.reg_secondary_school.$error" ng-if='tutor_reg.reg_secondary_school.$touched || errMsg.reg_secondary_school'>
											<div ng-message="required">請輸入你的就讀中學</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="field-label"><label for="reg_university">就讀大學<span>*</span></label></div>
									<div class="field-input">
										<div class="style-select">
											<select name="reg_university" id="reg_university" ng-model="formData.reg_university" required>
						                    	<option value="">請選擇</option>
						                        <option value="港大">香港大學</option>
						                        <option value="中大">香港中文大學</option>
						                        <option value="理大">香港理工大學</option>
						                        <option value="城大">香港城市大學</option>
						                        <option value="浸大">香港浸會大學</option>
						                        <option value="科大">香港科技大學</option>
						                        <option value="嶺大">嶺南大學</option>
						                        <option value="教育學院">香港教育學院</option>
						                        <option value="公開大學">香港公開大學</option>
						                        <option value="樹仁">樹仁學院</option>
						                        <option value="演藝學院">香港演藝學院</option>
						                        <option value="珠海書院">珠海書院</option>
						                        <option value="ive">香港教育專業學院</option>
						                        <option value="海外大學">海外大學</option>
						                        <option value="其他大學">其他大學</option>
											</select>
										</div>
										<div class="error-msg" ng-messages="tutor_reg.reg_university.$error" ng-if='tutor_reg.reg_university.$touched || errMsg.reg_university'>
											<div ng-message="required">請輸入你的就讀大學</div>
										</div>
									</div>
								</div>
								<div class="row" ng-show="formData.reg_university == '其他大學'">
									<div class="field-label"><label for="reg_other_university">其他大學</label></div>
									<div class="field-input">
										<input type="text" class="textfield" name="reg_other_university" id="reg_other_university" ng-model="formData.reg_other_university" ng-required="formData.reg_university == '其他大學'">
										<div class="error-msg" ng-messages="tutor_reg.reg_other_university.$error" ng-if='tutor_reg.reg_other_university.$touched || errMsg.reg_other_university'>
											<div ng-message="required">請輸入你的就讀大學</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="field-label"><label for="reg_uni_major">大學主修科目<span>*</span></label></div>
									<div class="field-input">
										<input type="text" class="textfield" name="reg_uni_major" id="reg_uni_major" ng-model="formData.reg_uni_major" required>
										<div class="error-msg" ng-messages="tutor_reg.reg_uni_major.$error" ng-if='tutor_reg.reg_uni_major.$touched || errMsg.reg_uni_major'>
											<div ng-message="required">請輸入你的大學主修科目</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="field-label"><label for="reg_uni_minor">其他修讀課程<span>*</span></label></div>
									<div class="field-input">
										<input type="text" class="textfield" name="reg_uni_minor" id="reg_uni_minor" ng-model="formData.reg_uni_minor" required>
										<div class="error-msg" ng-messages="tutor_reg.reg_uni_minor.$error" ng-if='tutor_reg.reg_uni_minor.$touched || errMsg.reg_uni_minor'>
											<div ng-message="required">請輸入你的其他修讀課程</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="field-label"><label for="reg_other_prof">其他專業應可課程</label></div>
									<div class="field-input">
										<input type="text" class="textfield" name="reg_other_prof" id="reg_other_prof" ng-model="formData.reg_other_prof">
										<div class="ps">TOFEL / GCE / LCC / ACCA / ORACLE / MCSE</div>
									</div>
								</div>
								<div class="row">
									<div class="field-label"><label for="reg_current_grade">現時就讀年級<span>*</span></label></div>
									<div class="field-input">
										<div class="style-select">
											<select name="reg_current_grade" id="reg_current_grade" ng-model="formData.reg_current_grade" required>
						                    	<option value="">請選擇</option>
						                        <optgroup label="仍在學申請者選項如下">
						                            <option value="中五或以下">中五或以下</option>
						                            <option value="中六至中七">中六至中七</option>
						                            <option value="大學一年級 (學位課程)">大學一年級 (學位課程)</option>
						                            <option value="大學二年級 (學位課程)">大學二年級 (學位課程)</option>
						                            <option value="大學三年級 (學位課程)">大學三年級 (學位課程)</option>
						                            <option value="大學四年級 (學位課程)">大學四年級 (學位課程)</option>
						                            <option value="大學一年級 (文憑、高級文憑或副學士)">大學一年級 (文憑、高級文憑或副學士)</option>
						                            <option value="大學二年級 (文憑、高級文憑或副學士)">大學二年級 (文憑、高級文憑或副學士)</option>
						                            <option value="大學三年級 (文憑、高級文憑或副學士)">大學三年級 (文憑、高級文憑或副學士)</option>
						                            <option value="大學四年級 (文憑、高級文憑或副學士)">大學四年級 (文憑、高級文憑或副學士)</option>
						                            <option value="大學碩士學生">大學碩士學生</option>
						                            <option value="大學博士學生">大學博士學生</option>
						                        </optgroup>
						                        <optgroup label="已完成學業者選項如下">
						                            <option value="修畢中學課程">修畢中學課程</option>
						                            <option value="大學畢業 (學位課程)">大學畢業 (學位課程)</option>
						                            <option value="大學畢業 (文憑、高級文憑或副學士)">大學畢業 (文憑、高級文憑或副學士)</option>
						                            <option value="完成碩士學位課程">完成碩士學位課程</option>
						                            <option value="完成博士學位課程">完成博士學位課程</option>
						                        </optgroup>
											</select>
										</div>
										<div class="error-msg" ng-messages="tutor_reg.reg_current_grade.$error" ng-if='tutor_reg.reg_current_grade.$touched || errMsg.reg_current_grade'>
											<div ng-message="required">請輸入你的現時就讀年級</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="field-label"><label for="reg_hkcee_mark">香港中學會考分數<span>*</span></label></div>
									<div class="field-input">
										<input type="number" class="textfield" name="reg_hkcee_mark" id="reg_hkcee_mark" ng-model="formData.reg_hkcee_mark" ng-max="30" ng-maxlength="2" required>
										<div class="ps">（六科成績總分）</div>
										<div class="error-msg" ng-messages="tutor_reg.reg_hkcee_mark.$error" ng-if='tutor_reg.reg_hkcee_mark.$touched || errMsg.reg_hkcee_mark'>
											<div ng-message="max maxlength number">請輸入正確的香港中學會考分數</div>
											<div ng-message="required">請輸入你的香港中學會考分數</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="field-label"><label for="reg_hkcee_lang">香港中學會考主要應考語言<span>*</span></label></div>
									<div class="field-input">
										<input type="radio" name="reg_hkcee_lang" id="reg_hkcee_lang_eng" value="英文" ng-model="formData.reg_hkcee_lang" required>
										<label class="fakebox" for="reg_hkcee_lang_eng">
											<svg x="0px" y="0px" viewBox="0 0 83.1 65.5" enable-background="new 0 0 83.1 65.5" xml:space="preserve">
											<polyline points="6.4,28.4 25.6,53.7 77.7,5.9 "/>
											</svg>
										</label>
										<span class="option-caption">英文</span>
										<input type="radio" name="reg_hkcee_lang" id="reg_hkcee_lang_chi" value="中文" ng-model="formData.reg_hkcee_lang" required>
										<label class="fakebox" for="reg_hkcee_lang_chi">
											<svg x="0px" y="0px" viewBox="0 0 83.1 65.5" enable-background="new 0 0 83.1 65.5" xml:space="preserve">
											<polyline points="6.4,28.4 25.6,53.7 77.7,5.9 "/>
											</svg>
										</label>
										<span class="option-caption">中文</span>
										<input type="radio" name="reg_hkcee_lang" id="reg_hkcee_lang_none" value="未有應考" ng-model="formData.reg_hkcee_lang" required>
										<label class="fakebox" for="reg_hkcee_lang_none">
											<svg x="0px" y="0px" viewBox="0 0 83.1 65.5" enable-background="new 0 0 83.1 65.5" xml:space="preserve">
											<polyline points="6.4,28.4 25.6,53.7 77.7,5.9 "/>
											</svg>
										</label>
										<span class="option-caption">未有應考</span>
										<div class="error-msg" ng-messages="tutor_reg.reg_hkcee_lang.$error" ng-if='errMsg.reg_hkcee_lang'>
											<div ng-message="required">請輸入你的香港中學會考主要應考語言</div>
										</div>
									</div>
								</div>
							</div>
							<div class="reg-step" ng-show="step == 6">
								<h5>學業履歷</h5>
								<div class="row-section">
									<div class="s-head" ng-click="hkcee_expanded = !hkcee_expanded" ng-class="{opened: hkcee_expanded}"><a href="javascript:void(0);">香港中學會考成績(HKCEE)<i></i></a></div>
									<div class="s-drop" ng-class="{slideDown: hkcee_expanded}">
										<div class="linehead">
											<div class="line"></div>
											<div class="label"><div>主科</div></div>
										</div>
										<div class="subjects-c clearfix">
											<div class="subject" ng-repeat="(key, value) in subject.hkcee.major">
												<label for="{{key}}">{{value.label}}</label>
												<div class="style-select">
													<select name="{{key}}" id="{{key}}" ng-model="formData[key]" ng-options="grade.value as grade.text for grade in value.option">
														<option value="">請選擇</option>
													</select>
												</div>
											</div>
										</div>
										<div class="linehead">
											<div class="line"></div>
											<div class="label"><div>文科</div></div>
										</div>
										<div class="subjects-c clearfix">
											<div class="subject" ng-repeat="(key, value) in subject.hkcee.liberalarts">
												<label for="{{key}}">{{value.label}}</label>
												<div class="style-select">
													<select name="{{key}}" id="{{key}}" ng-model="formData[key]" ng-options="grade.value as grade.text for grade in value.option">
														<option value="">請選擇</option>
													</select>
												</div>
											</div>
										</div>
										<div class="linehead">
											<div class="line"></div>
											<div class="label"><div>理科</div></div>
										</div>
										<div class="subjects-c clearfix">
											<div class="subject" ng-repeat="(key, value) in subject.hkcee.sciences">
												<label for="{{key}}">{{value.label}}</label>
												<div class="style-select">
													<select name="{{key}}" id="{{key}}" ng-model="formData[key]" ng-options="grade.value as grade.text for grade in value.option">
														<option value="">請選擇</option>
													</select>
												</div>
											</div>
										</div>
										<div class="linehead">
											<div class="line"></div>
											<div class="label"><div>商業學</div></div>
										</div>
										<div class="subjects-c clearfix">
											<div class="subject" ng-repeat="(key, value) in subject.hkcee.business">
												<label for="{{key}}">{{value.label}}</label>
												<div class="style-select">
													<select name="{{key}}" id="{{key}}" ng-model="formData[key]" ng-options="grade.value as grade.text for grade in value.option">
														<option value="">請選擇</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row-section">
									<div class="s-head" ng-click="hkale_expanded = !hkale_expanded" ng-class="{opened: hkale_expanded}"><a href="javascript:void(0);">香港高級程度會考成績(HKALE)<i></i></a></div>
									<div class="s-drop" ng-class="{slideDown: hkale_expanded}">
										<div class="linehead">
											<div class="line"></div>
											<div class="label"><div>主科</div></div>
										</div>
										<div class="subjects-c clearfix">
											<div class="subject" ng-repeat="(key, value) in subject.hkale.major">
												<label for="{{key}}">{{value.label}}</label>
												<div class="style-select">
													<select name="{{key}}" id="{{key}}" ng-model="formData[key]" ng-options="grade.value as grade.text for grade in value.option">
														<option value="">請選擇</option>
													</select>
												</div>
											</div>
										</div>
										<div class="linehead">
											<div class="line"></div>
											<div class="label"><div>文科</div></div>
										</div>
										<div class="subjects-c clearfix">
											<div class="subject" ng-repeat="(key, value) in subject.hkale.liberalarts">
												<label for="{{key}}">{{value.label}}</label>
												<div class="style-select">
													<select name="{{key}}" id="{{key}}" ng-model="formData[key]" ng-options="grade.value as grade.text for grade in value.option">
														<option value="">請選擇</option>
													</select>
												</div>
											</div>
										</div>
										<div class="linehead">
											<div class="line"></div>
											<div class="label"><div>理科</div></div>
										</div>
										<div class="subjects-c clearfix">
											<div class="subject" ng-repeat="(key, value) in subject.hkale.sciences">
												<label for="{{key}}">{{value.label}}</label>
												<div class="style-select">
													<select name="{{key}}" id="{{key}}" ng-model="formData[key]" ng-options="grade.value as grade.text for grade in value.option">
														<option value="">請選擇</option>
													</select>
												</div>
											</div>
										</div>
										<div class="linehead">
											<div class="line"></div>
											<div class="label"><div>商科</div></div>
										</div>
										<div class="subjects-c clearfix">
											<div class="subject" ng-repeat="(key, value) in subject.hkale.business">
												<label for="{{key}}">{{value.label}}</label>
												<div class="style-select">
													<select name="{{key}}" id="{{key}}" ng-model="formData[key]" ng-options="grade.value as grade.text for grade in value.option">
														<option value="">請選擇</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row-section">
									<div class="s-head" ng-click="hkdse_expanded = !hkdse_expanded" ng-class="{opened: hkdse_expanded}"><a href="javascript:void(0);">香港中學文憑成績(HKDSE)<i></i></a></div>
									<div class="s-drop" ng-class="{slideDown: hkdse_expanded}">
										<div class="linehead">
											<div class="line"></div>
											<div class="label"><div>核心科目</div></div>
										</div>
										<div class="subjects-c clearfix">
											<div class="subject" ng-repeat="(key, value) in subject.hkdse.major">
												<label for="{{key}}">{{value.label}}</label>
												<div class="style-select">
													<select name="{{key}}" id="{{key}}" ng-model="formData[key]" ng-options="grade.value as grade.text for grade in value.option">
														<option value="">請選擇</option>
													</select>
												</div>
											</div>
										</div>
										<div class="linehead">
											<div class="line"></div>
											<div class="label"><div>選修科目</div></div>
										</div>
										<div class="subjects-c clearfix">
											<div class="subject" ng-repeat="(key, value) in subject.hkdse.minor">
												<label for="{{key}}">{{value.label}}</label>
												<div class="style-select">
													<select name="{{key}}" id="{{key}}" ng-model="formData[key]" ng-options="grade.value as grade.text for grade in value.option">
														<option value="">請選擇</option>
													</select>
												</div>
											</div>
										</div>
										<div class="linehead">
											<div class="line"></div>
											<div class="label"><div>應用學習科目-創意學習</div></div>
										</div>
										<div class="subjects-c clearfix">
											<div class="subject" ng-repeat="(key, value) in subject.hkdse.creative_learning">
												<label for="{{key}}">{{value.label}}</label>
												<div class="style-select">
													<select name="{{key}}" id="{{key}}" ng-model="formData[key]" ng-options="grade.value as grade.text for grade in value.option">
														<option value="">請選擇</option>
													</select>
												</div>
											</div>
										</div>
										<div class="linehead">
											<div class="line"></div>
											<div class="label"><div>應用學習科目-媒體及傳意</div></div>
										</div>
										<div class="subjects-c clearfix">
											<div class="subject" ng-repeat="(key, value) in subject.hkdse.media">
												<label for="{{key}}">{{value.label}}</label>
												<div class="style-select">
													<select name="{{key}}" id="{{key}}" ng-model="formData[key]" ng-options="grade.value as grade.text for grade in value.option">
														<option value="">請選擇</option>
													</select>
												</div>
											</div>
										</div>
										<div class="linehead">
											<div class="line"></div>
											<div class="label"><div>應用學習科目-商業,管理及法律</div></div>
										</div>
										<div class="subjects-c clearfix">
											<div class="subject" ng-repeat="(key, value) in subject.hkdse.business_management_law">
												<label for="{{key}}">{{value.label}}</label>
												<div class="style-select">
													<select name="{{key}}" id="{{key}}" ng-model="formData[key]" ng-options="grade.value as grade.text for grade in value.option">
														<option value="">請選擇</option>
													</select>
												</div>
											</div>
										</div>
										<div class="linehead">
											<div class="line"></div>
											<div class="label"><div>應用學習科目-服務</div></div>
										</div>
										<div class="subjects-c clearfix">
											<div class="subject" ng-repeat="(key, value) in subject.hkdse.service">
												<label for="{{key}}">{{value.label}}</label>
												<div class="style-select">
													<select name="{{key}}" id="{{key}}" ng-model="formData[key]" ng-options="grade.value as grade.text for grade in value.option">
														<option value="">請選擇</option>
													</select>
												</div>
											</div>
										</div>
										<div class="linehead">
											<div class="line"></div>
											<div class="label"><div>應用學習科目-應用科學</div></div>
										</div>
										<div class="subjects-c clearfix">
											<div class="subject" ng-repeat="(key, value) in subject.hkdse.science">
												<label for="{{key}}">{{value.label}}</label>
												<div class="style-select">
													<select name="{{key}}" id="{{key}}" ng-model="formData[key]" ng-options="grade.value as grade.text for grade in value.option">
														<option value="">請選擇</option>
													</select>
												</div>
											</div>
										</div>
										<div class="linehead">
											<div class="line"></div>
											<div class="label"><div>應用學習科目-工程及生產</div></div>
										</div>
										<div class="subjects-c clearfix">
											<div class="subject" ng-repeat="(key, value) in subject.hkdse.engineering">
												<label for="{{key}}">{{value.label}}</label>
												<div class="style-select">
													<select name="{{key}}" id="{{key}}" ng-model="formData[key]" ng-options="grade.value as grade.text for grade in value.option">
														<option value="">請選擇</option>
													</select>
												</div>
											</div>
										</div>
										<div class="linehead">
											<div class="line"></div>
											<div class="label"><div>其他語言科目</div></div>
										</div>
										<div class="subjects-c clearfix">
											<div class="subject" ng-repeat="(key, value) in subject.hkdse.lang">
												<label for="{{key}}">{{value.label}}</label>
												<div class="style-select">
													<select name="{{key}}" id="{{key}}" ng-model="formData[key]" ng-options="grade.value as grade.text for grade in value.option">
														<option value="">請選擇</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="ctrl-btn">
								{{tutor_reg.$valid}}
								{{formData}}
								<a href="#" class="btn" ng-click="next()">下一步</a>
							</div>
							<!--{{someSelected(formData.selectedFruits)}}
							{{tutor_reg.gender.$valid}}
							{{tutor_reg.reg_email.$valid}}
							{{formData.selectedFruits}}
							{{tutor_reg.reg_mainlang.$valid}}-->
						</form>
					</div>
				</div>
			</div>
		</div>