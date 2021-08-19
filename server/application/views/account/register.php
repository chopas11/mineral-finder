<div class="content">
	<div class="content-form">
		<h2>Регистрация на нашем сайте. Пройдите регистрацию по указанному ниже плану</h2>
		<form class="form" action="/register" method="POST">
			<input type="text" name="login" placeholder="Укажите ваш логин" pattern="[A-Za-z-0-9]{3,30}" title="Логин должен содержать не менее 3 и не более 30 латинских символов или цифры от 0 до 9" required>
			<span class="form-hint">Логин должен содержать не менее 3 и не более 30 латинских символов и цифр от 0 до 9</span>
			<input type="email" name="email" placeholder="Укажите ваш E-mail" maxlength="30" title="В E-mail должно быть поле в формате example@site.com<" required>
			<span class="form-hint">В E-mail должно быть поле в формате example@site.com</span>
			<input type="password" name="password" placeholder="Придумайте пароль" pattern="[A-Za-z-0-9]{6,30}" title="Пароль должен содержать не менее 6 и не более 30 латинских символов и цифр от 0 до 9" required>
            <span class="form-hint">Пароль должен содержать не менее 6 и не более 30 латинских символов и цифр от 0 до 9</span>
            <input type="password" name="retry_password" placeholder="Повторите пароль" pattern="[A-Za-z-0-9]{6,30}" title="Пароль должен содержать не менее 6 и не более 30 латинских символов и цифр от 0 до 9" required>
			<span class="form-hint">Пароль должен содержать не менее 6 и не более 30 латинских символов и цифр от 0 до 9</span>
			<select id="register-select" name="country" required>
						<option value="0">Выберите страну:</option>
						<option value="1" data-imagesrc="/public/images/flags/ab.png" data-description="Европа">Абхазия</option>
						<option value="2" data-imagesrc="/public/images/flags/au.png" data-description="Австралия">Австралия</option>
						<option value="3" data-imagesrc="/public/images/flags/at.png" data-description="Европа">Австрия</option>
						<option value="4" data-imagesrc="/public/images/flags/az.png" data-description="Азия">Азербайджан</option>
						<option value="5" data-imagesrc="/public/images/flags/al.png" data-description="Европа">Албания</option>
						<option value="6" data-imagesrc="/public/images/flags/dz.png" data-description="Африка">Алжир</option>
						<option value="7" data-imagesrc="/public/images/flags/nz.png" data-description="Океания">Ангилья</option>
						<option value="8" data-imagesrc="/public/images/flags/ao.png" data-description="Африка">Ангола</option>
						<option value="9" data-imagesrc="/public/images/flags/ad.png" data-description="Европа">Андорра</option>
						<option value="10" data-imagesrc="/public/images/flags/ag.png" data-description="Океания">Антигуа и Барбуда</option>
						<option value="11" data-imagesrc="/public/images/flags/ar.png" data-description="Южная Америка">Аргентина</option>
						<option value="12" data-imagesrc="/public/images/flags/am.png" data-description="Азия">Армения</option>
						<option value="13" data-imagesrc="/public/images/flags/_.png" data-description="Океания">Аруба</option>
						<option value="14" data-imagesrc="/public/images/flags/af.png" data-description="Азия">Афганистан</option>
						<option value="15" data-imagesrc="/public/images/flags/bs.png" data-description="Окения">Багамские Острова</option>
						<option value="16" data-imagesrc="/public/images/flags/bd.png" data-description="Азия">Бангладеш</option>
						<option value="17" data-imagesrc="/public/images/flags/bb.png" data-description="Океания">Барбадос</option>
						<option value="18" data-imagesrc="/public/images/flags/bh.png" data-description="Азия">Бахрейн</option>
						<option value="19" data-imagesrc="/public/images/flags/bz.png" data-description="Северная Америка">Белиз</option>
						<option value="20" data-imagesrc="/public/images/flags/by.png" data-description="Европа">Белоруссия</option>
						<option value="21" data-imagesrc="/public/images/flags/be.png" data-description="Европа">Бельгия</option>
						<option value="22" data-imagesrc="/public/images/flags/bj.png" data-description="Африка">Бенин</option>
						<option value="23" data-imagesrc="/public/images/flags/bg.png" data-description="Европа">Болгария</option>
						<option value="24" data-imagesrc="/public/images/flags/bo.png" data-description="Южная Америка">Боливия</option>
						<option value="25" data-imagesrc="/public/images/flags/ba.png" data-description="Европа">Босния и Герцеговина</option>
						<option value="26" data-imagesrc="/public/images/flags/bw.png" data-description="Африка">Ботсвана</option>
						<option value="27" data-imagesrc="/public/images/flags/br.png" data-description="Южная Америка">Бразилия</option>
						<option value="28" data-imagesrc="/public/images/flags/bn.png" data-description="Азия">Бруней</option>
						<option value="29" data-imagesrc="/public/images/flags/bf.png" data-description="Африка">Буркина-Фасо</option>
						<option value="30" data-imagesrc="/public/images/flags/bi.png" data-description="Африка">Бурунди</option>
						<option value="31" data-imagesrc="/public/images/flags/bt.png" data-description="Азия">Бутан</option>
						<option value="32" data-imagesrc="/public/images/flags/vu.png" data-description="Океания">Вануату</option>
						<option value="33" data-imagesrc="/public/images/flags/va.png" data-description="Европа">Ватикан</option>
						<option value="34" data-imagesrc="/public/images/flags/gb.png" data-description="Европа">Великобритания</option>
						<option value="35" data-imagesrc="/public/images/flags/hu.png" data-description="Европа">Венгрия</option>
						<option value="36" data-imagesrc="/public/images/flags/ve.png" data-description="Южная Америка">Венесуэла</option>
						<option value="37" data-imagesrc="/public/images/flags/tl.png" data-description="Азия">Восточный Тимор</option>
						<option value="38" data-imagesrc="/public/images/flags/vn.png" data-description="Азия">Вьетнам</option>
						<option value="39" data-imagesrc="/public/images/flags/ga.png" data-description="Африка">Габон</option>
						<option value="40" data-imagesrc="/public/images/flags/ht.png" data-description="Океания">Гаити</option>
						<option value="41" data-imagesrc="/public/images/flags/gy.png" data-description="Южная Америка">Гайана</option>
						<option value="42" data-imagesrc="/public/images/flags/gm.png" data-description="Африка">Гамбия</option>
						<option value="43" data-imagesrc="/public/images/flags/gh.png" data-description="Африка">Гана</option>
						<option value="44" data-imagesrc="/public/images/flags/gt.png" data-description="Африка">Гватемала</option>
						<option value="45" data-imagesrc="/public/images/flags/gn.png" data-description="Африка">Гвинея</option>
						<option value="46" data-imagesrc="/public/images/flags/gw.png" data-description="Африка">Гвинея-Бисау</option>
						<option value="47" data-imagesrc="/public/images/flags/de.png" data-description="Европа">Германия</option>
						<option value="48" data-imagesrc="/public/images/flags/hn.png" data-description="Северная Америка">Гондурас</option>
						<option value="49" data-imagesrc="/public/images/flags/go.png" data-description="Азия">Гонконг</option>
						<option value="50" data-imagesrc="/public/images/flags/ps.png" data-description="Азия">Государство Палестина</option>
						<option value="51" data-imagesrc="/public/images/flags/gd.png" data-description="Океания">Гренада</option>
						<option value="52" data-imagesrc="/public/images/flags/gr.png" data-description="Европа">Греция</option>
						<option value="53" data-imagesrc="/public/images/flags/ge.png" data-description="Азия">Грузия</option>
						<option value="54" data-imagesrc="/public/images/flags/dk.png" data-description="Европа">Дания</option>
						<option value="55" data-imagesrc="/public/images/flags/cd.png" data-description="Африка">Демократическая Республика Конго</option>
						<option value="56" data-imagesrc="/public/images/flags/dj.png" data-description="Африка">Джибути</option>
						<option value="57" data-imagesrc="/public/images/flags/dm.png" data-description="Океания">Доминика</option>
						<option value="58" data-imagesrc="/public/images/flags/do.png" data-description="Океания">Доминиканская Республика</option>
						<option value="59" data-imagesrc="/public/images/flags/eg.png" data-description="Африка">Египет</option>
						<option value="60" data-imagesrc="/public/images/flags/zm.png" data-description="Африка">Замбия</option>
						<option value="61" data-imagesrc="/public/images/flags/zw.png" data-description="Африка">Зимбабве</option>
						<option value="62" data-imagesrc="/public/images/flags/il.png" data-description="Азия">Израиль</option>
						<option value="63" data-imagesrc="/public/images/flags/in.png" data-description="Азия">Индия</option>
						<option value="64" data-imagesrc="/public/images/flags/id.png" data-description="Азия">Индонезия</option>
						<option value="65" data-imagesrc="/public/images/flags/jo.png" data-description="Азия">Иордания</option>
						<option value="66" data-imagesrc="/public/images/flags/iq.png" data-description="Азия">Ирак</option>
						<option value="67" data-imagesrc="/public/images/flags/ir.png" data-description="Азия">Иран</option>
						<option value="68" data-imagesrc="/public/images/flags/ie.png" data-description="Европа">Ирландия</option>
						<option value="69" data-imagesrc="/public/images/flags/is.png" data-description="Европа">Исландия</option>
						<option value="70" data-imagesrc="/public/images/flags/es.png" data-description="Европа">Испания</option>
						<option value="71" data-imagesrc="/public/images/flags/it.png" data-description="Европа">Италия</option>
						<option value="72" data-imagesrc="/public/images/flags/ye.png" data-description="Азия">Йемен</option>
						<option value="73" data-imagesrc="/public/images/flags/cv.png" data-description="Океания">Кабо-Верде</option>
						<option value="74" data-imagesrc="/public/images/flags/kz.png" data-description="Азия">Казахстан</option>
						<option value="75" data-imagesrc="/public/images/flags/kh.png" data-description="Азия">Камбоджа</option>
						<option value="76" data-imagesrc="/public/images/flags/cm.png" data-description="Африка">Камерун</option>
						<option value="77" data-imagesrc="/public/images/flags/ca.png" data-description="Северная Америка">Канада</option>
						<option value="78" data-imagesrc="/public/images/flags/qa.png" data-description="Азия">Катар</option>
						<option value="79" data-imagesrc="/public/images/flags/ke.png" data-description="Африка">Кения</option>
						<option value="80" data-imagesrc="/public/images/flags/cy.png" data-description="Азия">Кипр</option>
						<option value="81" data-imagesrc="/public/images/flags/kg.png" data-description="Азия">Киргизия</option>
						<option value="82" data-imagesrc="/public/images/flags/ki.png" data-description="Океания">Кирибати</option>
						<option value="83" data-imagesrc="/public/images/flags/cn.png" data-description="Азия">Китай</option>
						<option value="84" data-imagesrc="/public/images/flags/kp.png" data-description="Азия">Корейская Народная Демократическая Республика</option>
						<option value="85" data-imagesrc="/public/images/flags/co.png" data-description="Южная Америка">Колумбия</option>
						<option value="86" data-imagesrc="/public/images/flags/km.png" data-description="Океания">Коморские Острова</option>
						<option value="87" data-imagesrc="/public/images/flags/cr.png" data-description="Океания">Коста-Рика</option>
						<option value="88" data-imagesrc="/public/images/flags/ci.png" data-description="Африка">Кот-д’Ивуар</option>
						<option value="89" data-imagesrc="/public/images/flags/cu.png" data-description="Южная Америка">Куба</option>
						<option value="90" data-imagesrc="/public/images/flags/kw.png" data-description="Азия">Кувейт</option>
						<option value="91" data-imagesrc="/public/images/flags/nr.png" data-description="Океания">Кюрасао</option>
						<option value="92" data-imagesrc="/public/images/flags/la.png" data-description="Азия">Лаос</option>
						<option value="93" data-imagesrc="/public/images/flags/lv.png" data-description="Европа">Латвия</option>
						<option value="94" data-imagesrc="/public/images/flags/lr.png" data-description="Африка">Либерия</option>
						<option value="95" data-imagesrc="/public/images/flags/lb.png" data-description="Азия">Ливан</option>
						<option value="96" data-imagesrc="/public/images/flags/ly.png" data-description="Африка">Ливия</option>
						<option value="97" data-imagesrc="/public/images/flags/lt.png" data-description="Европа">Литва</option>
						<option value="98" data-imagesrc="/public/images/flags/li.png" data-description="Европа">Лихтенштейн</option>
						<option value="99" data-imagesrc="/public/images/flags/lu.png" data-description="Европа">Люксембург</option>
						<option value="100" data-imagesrc="/public/images/flags/mu.png" data-description="Африка">Маврикий</option>
						<option value="101" data-imagesrc="/public/images/flags/mr.png" data-description="Африка">Мавритания</option>
						<option value="102" data-imagesrc="/public/images/flags/mg.png" data-description="Африка">Мадагаскар</option>
						<option value="103" data-imagesrc="/public/images/flags/mk.png" data-description="Европа">Македония</option>
						<option value="104" data-imagesrc="/public/images/flags/mw.png" data-description="Африка">Малави</option>
						<option value="105" data-imagesrc="/public/images/flags/my.png" data-description="Азия">Малайзия</option>
						<option value="106" data-imagesrc="/public/images/flags/ml.png" data-description="Африка">Мали</option>
						<option value="107" data-imagesrc="/public/images/flags/mv.png" data-description="Океания">Мальдивы</option>
						<option value="108" data-imagesrc="/public/images/flags/mt.png" data-description="Европа">Мальта</option>
						<option value="109" data-imagesrc="/public/images/flags/ma.png" data-description="Азия">Марокко</option>
						<option value="110" data-imagesrc="/public/images/flags/mh.png" data-description="Океания">Маршалловы Острова</option>
						<option value="111" data-imagesrc="/public/images/flags/mx.png" data-description="Северная Америка">Мексика</option>
						<option value="112" data-imagesrc="/public/images/flags/fm.png" data-description="Океания">Микронезия</option>
						<option value="113" data-imagesrc="/public/images/flags/mz.png" data-description="Африка">Мозамбик</option>
						<option value="114" data-imagesrc="/public/images/flags/md.png" data-description="Европа">Молдавия</option>
						<option value="115" data-imagesrc="/public/images/flags/mc.png" data-description="Европа">Монако</option>
						<option value="116" data-imagesrc="/public/images/flags/mn.png" data-description="Азия">Монголия</option>
						<option value="117" data-imagesrc="/public/images/flags/mm.png" data-description="Азия">Мьянма</option>
						<option value="118" data-imagesrc="/public/images/flags/na.png" data-description="Африка">Намибия</option>
						<option value="119" data-imagesrc="/public/images/flags/nr.png" data-description="Океания">Науру</option>
						<option value="120" data-imagesrc="/public/images/flags/np.png" data-description="Азия">Непал</option>
						<option value="121" data-imagesrc="/public/images/flags/ne.png" data-description="Азия">Нигер</option>
						<option value="122" data-imagesrc="/public/images/flags/ng.png" data-description="Африка">Нигерия</option>
						<option value="123" data-imagesrc="/public/images/flags/nl.png" data-description="Европа">Нидерланды</option>
						<option value="124" data-imagesrc="/public/images/flags/ni.png" data-description="Южная Америка">Никарагуа</option>
						<option value="125" data-imagesrc="/public/images/flags/nu.png" data-description="Океания">Ниуэ</option>
						<option value="126" data-imagesrc="/public/images/flags/nz.png" data-description="Океания">Новая Зеландия</option>
						<option value="127" data-imagesrc="/public/images/flags/no.png" data-description="Европа">Норвегия</option>
						<option value="128" data-imagesrc="/public/images/flags/ae.png" data-description="Азия">Объединённые Арабские Эмираты</option>
						<option value="129" data-imagesrc="/public/images/flags/om.png" data-description="Азия">Оман</option>
						<option value="130" data-imagesrc="/public/images/flags/ck.png" data-description="Океания">Острова Кука</option>
						<option value="131" data-imagesrc="/public/images/flags/pk.png" data-description="Азия">Пакистан</option>
						<option value="132" data-imagesrc="/public/images/flags/pw.png" data-description="Океания">Палау</option>
						<option value="133" data-imagesrc="/public/images/flags/pa.png" data-description="Северная Америка">Панама</option>
						<option value="134" data-imagesrc="/public/images/flags/pg.png" data-description="Океания">Папуа – Новая Гвинея</option>
						<option value="135" data-imagesrc="/public/images/flags/py.png" data-description="Южная Америка">Парагвай</option>
						<option value="136" data-imagesrc="/public/images/flags/pe.png" data-description="Южная Америка">Перу</option>
						<option value="137" data-imagesrc="/public/images/flags/pl.png" data-description="Европа">Польша</option>
						<option value="138" data-imagesrc="/public/images/flags/pt.png" data-description="Европа">Португалия</option>
						<option value="139" data-imagesrc="/public/images/flags/p_.png" data-description="Южная Америка">Пуэрто-Рико</option>
						<option value="140" data-imagesrc="/public/images/flags/rk.png" data-description="Африка">Республика Конго</option>
						<option value="141" data-imagesrc="/public/images/flags/ru.png" data-description="Европа">Российская Федерация</option>
						<option value="142" data-imagesrc="/public/images/flags/rw.png" data-description="Африка">Руанда</option>
						<option value="143" data-imagesrc="/public/images/flags/ro.png" data-description="Европа">Румыния</option>
						<option value="144" data-imagesrc="/public/images/flags/sv.png" data-description="Северная Америка">Сальвадор</option>
						<option value="145" data-imagesrc="/public/images/flags/ws.png" data-description="Океания">Самоа</option>
						<option value="146" data-imagesrc="/public/images/flags/sm.png" data-description="Европа">Сан-Марино</option>
						<option value="147" data-imagesrc="/public/images/flags/st.png" data-description="Океания">Сан-Томе и Принсипи</option>
						<option value="148" data-imagesrc="/public/images/flags/sa.png" data-description="Азия">Саудовская Аравия</option>
						<option value="149" data-imagesrc="/public/images/flags/eh.png" data-description="Азия">Сахарская Арабская Демократическая Республика</option>
						<!-- <option value="150" data-imagesrc="/public/images/flags/_.png" data-description="xxx">Свазиленд</option>
						<option value="151" data-imagesrc="/public/images/flags/_.png" data-description="xxx">Северный Кипр</option> -->
						<option value="152" data-imagesrc="/public/images/flags/sc.png" data-description="xxx">Сейшельские Острова</option>
						<option value="153" data-imagesrc="/public/images/flags/sn.png" data-description="xxx">Сенегал</option>
						<option value="154" data-imagesrc="/public/images/flags/.png" data-description="xxx">Сент-Винсент и Гренадины</option>
						<option value="155" data-imagesrc="/public/images/flags/_.png" data-description="xxx">Сент-Китс и Невис</option>
						<option value="156" data-imagesrc="/public/images/flags/_.png" data-description="xxx">Сент-Люсия</option>
						<option value="157" data-imagesrc="/public/images/flags/_rs.png" data-description="xxx">Сербия</option>
						<option value="158" data-imagesrc="/public/images/flags/sg.png" data-description="xxx">Сингапур</option>
						<option value="159" data-imagesrc="/public/images/flags/_.png" data-description="xxx">Синт-Мартен</option>
						<option value="160" data-imagesrc="/public/images/flags/sy.png" data-description="xxx">Сирия</option>
						<option value="161" data-imagesrc="/public/images/flags/sk.png" data-description="Европа">Словакия</option>
						<option value="162" data-imagesrc="/public/images/flags/si.png" data-description="Европа">Словения</option>
						<option value="163" data-imagesrc="/public/images/flags/us.png" data-description="Северная Америка">Соединённые Штаты Америки</option>
						<option value="164" data-imagesrc="/public/images/flags/sb.png" data-description="xxx">Соломоновы Острова</option>
						<option value="165" data-imagesrc="/public/images/flags/so.png" data-description="xxx">Сомали</option>
						<option value="166" data-imagesrc="/public/images/flags/sd.png" data-description="xxx">Судан</option>
						<!-- <option value="167" data-imagesrc="/public/images/flags/_.png" data-description="xxx">Суринам</option>
						<option value="168" data-imagesrc="/public/images/flags/_.png" data-description="xxx">Сьерра-Леоне</option>
						<option value="169" data-imagesrc="/public/images/flags/_.png" data-description="xxx">Таджикистан</option>
						<option value="170" data-imagesrc="/public/images/flags/_.png" data-description="xxx">Таиланд</option>
						<option value="171" data-imagesrc="/public/images/flags/_.png" data-description="xxx">Танзания</option>
						<option value="172" data-imagesrc="/public/images/flags/_.png" data-description="xxx">Того</option>
						<option value="173" data-imagesrc="/public/images/flags/_.png" data-description="xxx">Тонга</option>
						<option value="174" data-imagesrc="/public/images/flags/_.png" data-description="xxx">Тринидад и Тобаго</option> -->
						<option value="175" data-imagesrc="/public/images/flags/_.png" data-description="xxx">Тувалу</option>
						<option value="176" data-imagesrc="/public/images/flags/tn.png" data-description="xxx">Тунис</option>
						<option value="177" data-imagesrc="/public/images/flags/_.png" data-description="xxx">Туркмения</option>
						<option value="178" data-imagesrc="/public/images/flags/tk.png" data-description="xxx">Турция</option>
						<option value="179" data-imagesrc="/public/images/flags/_.png" data-description="xxx">Уганда</option>
						<option value="180" data-imagesrc="/public/images/flags/uz.png" data-description="xxx">Узбекистан</option>
						<option value="181" data-imagesrc="/public/images/flags/ua.png" data-description="xxx">Украина</option>
						<option value="182" data-imagesrc="/public/images/flags/_.png" data-description="xxx">Уругвай</option>
						<option value="183" data-imagesrc="/public/images/flags/_.png" data-description="xxx">Фарерские острова</option>
						<option value="184" data-imagesrc="/public/images/flags/_.png" data-description="xxx">Фиджи</option>
						<option value="185" data-imagesrc="/public/images/flags/_.png" data-description="xxx">Филиппины</option>
						<option value="186" data-imagesrc="/public/images/flags/fi.png" data-description="xxx">Финляндия</option>
						<option value="187" data-imagesrc="/public/images/flags/fr.png" data-description="xxx">Франция</option>
						<option value="188" data-imagesrc="/public/images/flags/_.png" data-description="xxx">Хорватия</option>
						<option value="189" data-imagesrc="/public/images/flags/_.png" data-description="xxx">Центральноафриканская Республика</option>
						<option value="190" data-imagesrc="/public/images/flags/_.png" data-description="xxx">Чад</option>
						<option value="191" data-imagesrc="/public/images/flags/me.png" data-description="xxx">Черногория</option>
						<option value="192" data-imagesrc="/public/images/flags/cz.png" data-description="Европа">Чехия</option>
						<option value="193" data-imagesrc="/public/images/flags/.png" data-description="Южная америка">Чили</option>
						<option value="194" data-imagesrc="/public/images/flags/ch.png" data-description="Европа">Швейцария</option>
						<option value="195" data-imagesrc="/public/images/flags/se.png" data-description="Европа">Швеция</option>
						<option value="196" data-imagesrc="/public/images/flags/jm.png" data-description="Южная Америка">Ямайка</option>
						<option value="197" data-imagesrc="/public/images/flags/jp.png" data-description="Азия">Япония</option>						
				</select>
				<select name="question">
					<option value="0">Выберите вопрос для кодового слова:</option>
					<option value="1">Фамилия любимого преподавателя</option>
					<option value="2">Фамилия и имя любимого героя кино</option>
					<option value="3">Имя любимой музыкальной группы</option>
					<option value="4">Ваша первая работа</option>
					<option value="5">Марка вашего первого автомобиля</option>
					<option value="6">Девичья фамилия матери</option>
					<option value="7">Ваш любимый трек</option>
					<option value="8">Любимое блюдо</option>
					<option value="9">Фамилия и имя работодателя</option>
					<option value="10">Название улицы, на которой вы родились</option>
					<option value="11">Любимая театральная постановка</option>
					<option value="12">Любимый актер</option>
					<option value="13">Любимый исполнитель</option>
				</select>
			<input type="text" name="answer" placeholder="Ответ на ваш вопрос" pattern="[A-z-0-9]{3,30}" title="Ответ на вопрос должно содержать не менее 3 и неболее 30 латинских символов и цифр от 0 до 9">
			<span class="form-hint">Ответ на вопрос должен содержать не менее 3 и неболее 30 латинских символов или цифр от 0 до 9</span>
			<span class="form-link">Кодовое слово в виде ответа на вопрос будет нужно в будущем для восстановления пароля к вашему аккаунту </span><br><br>
			<div class="form-captcha">
				<img src="/public/images/captcha.php" alt="Captcha" height="50px">
			</div>
			<div class="form-reloadCaptcha"><i class="fa fa-refresh" aria-hidden="true"></i> Другой код</div>
			<input type="text" name="captcha" placeholder="Введите код с картинки" pattern="[a-z-0-9]{4,7}" title="Код с картинки должен содержать строчные латинские буквы и цифры от 0 до 9" required>
			<span class="form-hint">Код с картинки должен содержать строчные латинские буквы и цифры от 0 до 9</span><br>
			
			<a href="/login"><span class="form-link">Войти в аккаунт</span></a>
    		<input type="submit" name="register_f" value="Зарегистрироваться">
		</form>
	</div>
</div>
<br><br><br>
