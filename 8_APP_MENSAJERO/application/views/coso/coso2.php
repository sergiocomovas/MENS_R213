<!-- https://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/index.php/coso -->
    
    <div style="position: absolute;  top: 0;">
    <button class="openbtn" onclick="openNav()">&#9776; MENU</button>
    </div>


    <div id="Jimeno">
    <div id="capture_1">
      <form>
        <!--<div>
          <ul class="tabs-list">
            <li class="active">
              <a href="#sheet1">Cálculo_Capitales_Recomendados</a>
            </li>
          </ul>
        </div>-->
        <div class="tabs">
          <div id="sheet1" class="tab-content active">
          <div contenteditable="true"  class="bg-primary text-light text-center h3 m-0 p-0">Gimeno <?php date_default_timezone_set('Europe/Madrid'); echo date("d/m/Y H:i"); ?></div>
            <table class="mt-0 pt-0">
              <tbody>
                <tr class="s0r0 ro1">
                  <td></td>
                </tr>
                <tr class="s0r1 ro1 hidden-row">
                  <td class="s0r1c0 text ce5"></td>
                  <td class="s0r1c1 text ce6">
                    <p>
                      Continente Mínimo recomendado
                    </p>
                  </td>
                  <td class="s0r1c2 in ce7">
                    <input id="s0r1c2" name="s0r1c2" data-value="30000" data-value-type="float" data-format="">
                  </td>
                </tr>
                <tr class="s0r2 ro1 hidden-row">
                  <td class="s0r2c0 text ce5"></td>
                  <td class="s0r2c1 text ce6">
                    <p>
                      Continente Máximo recomendado
                    </p>
                  </td>
                  <td class="s0r2c2 in ce7">
                    <input id="s0r2c2" name="s0r2c2" data-value="600000" data-value-type="float" data-format="">
                  </td>
                </tr>
                <tr class="s0r3 ro1 hidden-row">
                  <td class="s0r3c0 text ce5"></td>
                  <td class="s0r3c1 text ce4" rowspan="4">
                    <p>
                      Tipo de vivienda
                    </p>
                  </td>
                  <td class="s0r3c2 in in--string ce7">
                    <input id="s0r3c2" name="s0r3c2" data-value="Piso / Piso dúplex" data-value-type="string" data-format="">
                  </td>
                </tr>
                <tr class="s0r4 ro1 hidden-row">
                  <td class="s0r4c0 text ce5"></td>
                  <td class="s0r4c2 in in--string ce7">
                    <input id="s0r4c2" name="s0r4c2" data-value="Chalé Adosado" data-value-type="string" data-format="">
                  </td>
                </tr>
                <tr class="s0r5 ro1 hidden-row">
                  <td class="s0r5c0 text ce5"></td>
                  <td class="s0r5c2 in in--string ce7">
                    <input id="s0r5c2" name="s0r5c2" data-value="Chalé Independiente" data-value-type="string" data-format="">
                  </td>
                </tr>
                <tr class="s0r6 ro1 hidden-row">
                  <td class="s0r6c0 text ce5"></td>
                  <td class="s0r6c2 in in--string ce7">
                    <input id="s0r6c2" name="s0r6c2" data-value="Casa de pueblo" data-value-type="string" data-format="">
                  </td>
                </tr>
                <tr class="s0r7 ro1 hidden-row">
                  <td class="s0r7c0 text ce5"></td>
                  <td class="s0r7c1 text ce4" rowspan="3">
                    <p>
                      Régimen
                    </p>
                  </td>
                  <td class="s0r7c2 in in--string ce7">
                    <input id="s0r7c2" name="s0r7c2" data-value="Propietario uso propio" data-value-type="string" data-format="">
                  </td>
                </tr>
                <tr class="s0r8 ro1 hidden-row">
                  <td class="s0r8c0 text ce5"></td>
                  <td class="s0r8c2 in in--string ce7">
                    <input id="s0r8c2" name="s0r8c2" data-value="Propietario que alquila" data-value-type="string" data-format="">
                  </td>
                </tr>
                <tr class="s0r9 ro1 hidden-row">
                  <td class="s0r9c0 text ce5"></td>
                  <td class="s0r9c2 in in--string ce7">
                    <input id="s0r9c2" name="s0r9c2" data-value="Inquilino" data-value-type="string" data-format="">
                  </td>
                </tr>
                <tr class="s0r10 ro1 hidden-row">
                  <td class="s0r10c0 text ce5"></td>
                  <td class="s0r10c1 text ce4" rowspan="4">
                    <p>
                      Uso
                    </p>
                  </td>
                  <td class="s0r10c2 in in--string ce7">
                    <input id="s0r10c2" name="s0r10c2" data-value="Habitual" data-value-type="string" data-format="">
                  </td>
                </tr>
                <tr class="s0r11 ro1 hidden-row">
                  <td class="s0r11c0 text ce5"></td>
                  <td class="s0r11c2 in in--string ce7">
                    <input id="s0r11c2" name="s0r11c2" data-value="Fin de semana" data-value-type="string" data-format="">
                  </td>
                </tr>
                <tr class="s0r12 ro1 hidden-row">
                  <td class="s0r12c0 text ce5"></td>
                  <td class="s0r12c2 in in--string ce7">
                    <input id="s0r12c2" name="s0r12c2" data-value="Vacaciones" data-value-type="string" data-format="">
                  </td>
                </tr>
                <tr class="s0r13 ro1 hidden-row">
                  <td class="s0r13c0 text ce5"></td>
                  <td class="s0r13c2 in in--string ce7">
                    <input id="s0r13c2" name="s0r13c2" data-value="Desocupada" data-value-type="string" data-format="">
                  </td>
                </tr>
                <tr class="s0r14 ro1 hidden-row">
                  <td class="s0r14c0 text ce5"></td>
                  <td class="s0r14c1 text ce6">
                    <p>
                      Concatenado Uso/Régimen
                    </p>
                  </td>
                  <td class="s0r14c2 out out--string ce7">
                    <input disabled="disabled" name="s0r14c2" data-value="HabitualPropietario uso propio" data-value-type="string" data-format="">
                  </td>
                </tr>
                <tr class="s0r15 ro1 hidden-row">
                  <td class="s0r15c0 text ce5"></td>
                  <td class="s0r15c1 text ce6">
                    <p>
                      Contenido Mínimo recomendado
                    </p>
                  </td>
                  <td class="s0r15c2 text ce7"></td>
                </tr>
                <tr class="s0r16 ro1 hidden-row">
                  <td class="s0r16c0 text ce5"></td>
                  <td class="s0r16c1 out out--string ce7">
                    <input disabled="disabled" name="s0r16c1" data-value="HabitualPropietario uso propio" data-value-type="string" data-format="">
                  </td>
                  <td class="s0r16c2 in ce7">
                    <input id="s0r16c2" name="s0r16c2" data-value="12000" data-value-type="float" data-format="">
                  </td>
                </tr>
                <tr class="s0r17 ro1 hidden-row">
                  <td class="s0r17c0 text ce5"></td>
                  <td class="s0r17c1 out out--string ce7">
                    <input disabled="disabled" name="s0r17c1" data-value="HabitualPropietario que alquila" data-value-type="string" data-format="">
                  </td>
                  <td class="s0r17c2 in ce7">
                    <input id="s0r17c2" name="s0r17c2" data-value="8000" data-value-type="float" data-format="">
                  </td>
                </tr>
                <tr class="s0r18 ro1 hidden-row">
                  <td class="s0r18c0 text ce5"></td>
                  <td class="s0r18c1 out out--string ce7">
                    <input disabled="disabled" name="s0r18c1" data-value="HabitualInquilino" data-value-type="string" data-format="">
                  </td>
                  <td class="s0r18c2 in ce7">
                    <input id="s0r18c2" name="s0r18c2" data-value="10000" data-value-type="float" data-format="">
                  </td>
                </tr>
                <tr class="s0r19 ro1 hidden-row">
                  <td class="s0r19c0 text ce5"></td>
                  <td class="s0r19c1 out out--string ce7">
                    <input disabled="disabled" name="s0r19c1" data-value="Fin de semanaPropietario uso propio" data-value-type="string" data-format="">
                  </td>
                  <td class="s0r19c2 in ce7">
                    <input id="s0r19c2" name="s0r19c2" data-value="10000" data-value-type="float" data-format="">
                  </td>
                </tr>
                <tr class="s0r20 ro1 hidden-row">
                  <td class="s0r20c0 text ce5"></td>
                  <td class="s0r20c1 out out--string ce7">
                    <input disabled="disabled" name="s0r20c1" data-value="Fin de semanaPropietario que alquila" data-value-type="string" data-format="">
                  </td>
                  <td class="s0r20c2 in ce7">
                    <input id="s0r20c2" name="s0r20c2" data-value="8000" data-value-type="float" data-format="">
                  </td>
                </tr>
                <tr class="s0r21 ro1 hidden-row">
                  <td class="s0r21c0 text ce5"></td>
                  <td class="s0r21c1 out out--string ce7">
                    <input disabled="disabled" name="s0r21c1" data-value="Fin de semanaInquilino" data-value-type="string" data-format="">
                  </td>
                  <td class="s0r21c2 in ce7">
                    <input id="s0r21c2" name="s0r21c2" data-value="8000" data-value-type="float" data-format="">
                  </td>
                </tr>
                <tr class="s0r22 ro1 hidden-row">
                  <td class="s0r22c0 text ce5"></td>
                  <td class="s0r22c1 out out--string ce7">
                    <input disabled="disabled" name="s0r22c1" data-value="VacacionesPropietario uso propio" data-value-type="string" data-format="">
                  </td>
                  <td class="s0r22c2 in ce7">
                    <input id="s0r22c2" name="s0r22c2" data-value="10000" data-value-type="float" data-format="">
                  </td>
                </tr>
                <tr class="s0r23 ro1 hidden-row">
                  <td class="s0r23c0 text ce5"></td>
                  <td class="s0r23c1 out out--string ce7">
                    <input disabled="disabled" name="s0r23c1" data-value="VacacionesPropietario que alquila" data-value-type="string" data-format="">
                  </td>
                  <td class="s0r23c2 in ce7">
                    <input id="s0r23c2" name="s0r23c2" data-value="8000" data-value-type="float" data-format="">
                  </td>
                </tr>
                <tr class="s0r24 ro1 hidden-row">
                  <td class="s0r24c0 text ce5"></td>
                  <td class="s0r24c1 out out--string ce7">
                    <input disabled="disabled" name="s0r24c1" data-value="VacacionesInquilino" data-value-type="string" data-format="">
                  </td>
                  <td class="s0r24c2 in ce7">
                    <input id="s0r24c2" name="s0r24c2" data-value="8000" data-value-type="float" data-format="">
                  </td>
                </tr>
                <tr class="s0r25 ro1 hidden-row">
                  <td class="s0r25c0 text ce5"></td>
                  <td class="s0r25c1 out out--string ce7">
                    <input disabled="disabled" name="s0r25c1" data-value="DesocupadaPropietario uso propio" data-value-type="string" data-format="">
                  </td>
                  <td class="s0r25c2 in ce7">
                    <input id="s0r25c2" name="s0r25c2" data-value="6000" data-value-type="float" data-format="">
                  </td>
                </tr>
                <tr class="s0r26 ro1 hidden-row">
                  <td class="s0r26c0 text ce5"></td>
                  <td class="s0r26c1 text ce6">
                    <p>
                      Contenido Máximo recomendado
                    </p>
                  </td>
                  <td class="s0r26c2 text ce7">
                    <p>
                      30000
                    </p>
                  </td>
                </tr>
                <tr class="s0r27 ro1 hidden-row">
                  <td class="s0r27c0 text ce5"></td>
                  <td class="s0r27c1 text ce4" rowspan="5">
                    <p>
                      Nº habitaciones
                    </p>
                  </td>
                  <td class="s0r27c2 text ce7">
                    <p>
                      1
                    </p>
                  </td>
                </tr>
                <tr class="s0r28 ro1 hidden-row">
                  <td class="s0r28c0 text ce5"></td>
                  <td class="s0r28c2 text ce7">
                    <p>
                      2
                    </p>
                  </td>
                </tr>
                <tr class="s0r29 ro1 hidden-row">
                  <td class="s0r29c0 text ce5"></td>
                  <td class="s0r29c2 text ce7">
                    <p>
                      3
                    </p>
                  </td>
                </tr>
                <tr class="s0r30 ro1 hidden-row">
                  <td class="s0r30c0 text ce5"></td>
                  <td class="s0r30c2 text ce7">
                    <p>
                      4
                    </p>
                  </td>
                </tr>
                <tr class="s0r31 ro1 hidden-row">
                  <td class="s0r31c0 text ce5"></td>
                  <td class="s0r31c2 text ce7">
                    <p>
                      5
                    </p>
                  </td>
                </tr>
                <tr class="s0r32 ro1 hidden-row">
                  <td class="s0r32c0 text ce5"></td>
                  <td class="s0r32c1 text ce4" rowspan="7">
                    <p>
                      Nº personas
                    </p>
                  </td>
                  <td class="s0r32c2 text ce7">
                    <p>
                      0
                    </p>
                  </td>
                </tr>
                <tr class="s0r33 ro1 hidden-row">
                  <td class="s0r33c0 text ce5"></td>
                  <td class="s0r33c2 text ce7">
                    <p>
                      1
                    </p>
                  </td>
                </tr>
                <tr class="s0r34 ro1 hidden-row">
                  <td class="s0r34c0 text ce5"></td>
                  <td class="s0r34c2 text ce7">
                    <p>
                      2
                    </p>
                  </td>
                </tr>
                <tr class="s0r35 ro1 hidden-row">
                  <td class="s0r35c0 text ce5"></td>
                  <td class="s0r35c2 text ce7">
                    <p>
                      3
                    </p>
                  </td>
                </tr>
                <tr class="s0r36 ro1 hidden-row">
                  <td class="s0r36c0 text ce5"></td>
                  <td class="s0r36c2 text ce7">
                    <p>
                      4
                    </p>
                  </td>
                </tr>
                <tr class="s0r37 ro1 hidden-row">
                  <td class="s0r37c0 text ce5"></td>
                  <td class="s0r37c2 text ce7">
                    <p>
                      5
                    </p>
                  </td>
                </tr>
                <tr class="s0r38 ro1 hidden-row">
                  <td class="s0r38c0 text ce5"></td>
                  <td class="s0r38c2 text ce7">
                    <p>
                      6
                    </p>
                  </td>
                </tr>
                <tr class="s0r39 ro1">
                  <td></td>
                </tr>
                <tr class="s0r40 ro2">
                  <td class="s0r40c0 text ce5"></td>
                  <td class="s0r40c1 text ce3" colspan="2">
                    <p>
                      Cálculo Capitales Recomendados en cotización/póliza NGP
                    </p>
                  </td>
                </tr>
                <tr class="s0r41 ro3">
                  <td class="s0r41c0 text ce5"></td>
                  <td class="s0r41c1 text ce2" colspan="2">
                    <p>
                      Se informará la celda amarilla de forma manual (superficie), las celdas azules según los desplegables de cada una de ellas. <br> El resultado de los capitales recomendados se mostrarán en las celdas verdes:
                    </p>
                  </td>
                </tr>
                <tr class="s0r42 ro4">
                  <td></td>
                </tr>
                <tr class="s0r43 ro1">
                  <td class="s0r43c0 text ce5"></td>
                  <td class="s0r43c1 text ce11">
                    <p>
                      Superficie
                    </p>
                  </td>
                  <td class="s0r43c2 in ce12">
                    <input id="s0r43c2" name="s0r43c2" data-value="292" data-value-type="float" data-format="">
                  </td>
                </tr>
                <tr class="s0r44 ro1">
                  <td class="s0r44c0 text ce5"></td>
                  <td class="s0r44c1 text ce11">
                    <p>
                      Tipo de vivienda
                    </p>
                  </td>
                  <td class="s0r44c2 in in--string ce13">
                    <select style="background-color:#CEECF5;" id="s0r44c2" name="s0r44c2" data-value-type="string" data-value="Chalé Independiente">
                      <option value="Piso / Piso dúplex">
                        Piso / Piso dúplex
                      </option>
                      <option value="Chalé Adosado">
                        Chalé Adosado
                      </option>
                      <option selected="" value="Chalé Independiente">
                        Chalé Independiente
                      </option>
                      <option value="Casa de pueblo">
                        Casa de pueblo
                      </option>
                    </select>
                  </td>
                </tr>
                <tr class="s0r45 ro1">
                  <td class="s0r45c0 text ce5"></td>
                  <td class="s0r45c1 text ce11">
                    <p>
                      Régimen
                    </p>
                  </td>
                  <td class="s0r45c2 in in--string ce13">
                    <select style="background-color:#CEECF5;"  id="s0r45c2" name="s0r45c2" data-value-type="string" data-value="Propietario uso propio">
                      <option selected="" value="Propietario uso propio">
                        Propietario uso propio
                      </option>
                      <option value="Propietario que alquila">
                        Propietario que alquila
                      </option>
                      <option value="Inquilino">
                        Inquilino
                      </option>
                    </select>
                  </td>
                </tr>
                <tr class="s0r46 ro1">
                  <td class="s0r46c0 text ce5"></td>
                  <td class="s0r46c1 text ce11">
                    <p>
                      Uso
                    </p>
                  </td>
                  <td class="s0r46c2 in in--string ce13">
                    <select style="background-color:#CEECF5;" id="s0r46c2" name="s0r46c2" data-value-type="string" data-value="Habitual">
                      <option selected="" value="Habitual">
                        Habitual
                      </option>
                      <option value="Fin de semana">
                        Fin de semana
                      </option>
                      <option value="Vacaciones">
                        Vacaciones
                      </option>
                      <option value="Desocupada">
                        Desocupada
                      </option>
                    </select>
                  </td>
                </tr>
                <tr class="s0r47 ro1">
                  <td class="s0r47c0 text ce5"></td>
                  <td class="s0r47c1 text ce11">
                    <p>
                      Nº habitaciones
                    </p>
                  </td>
                  <td class="s0r47c2 in ce13">
                    <select style="background-color:#CEECF5;"  id="s0r47c2" name="s0r47c2" data-value-type="float" data-value="5">
                      <option value="1">
                        1
                      </option>
                      <option value="2">
                        2
                      </option>
                      <option value="3">
                        3
                      </option>
                      <option value="4">
                        4
                      </option>
                      <option selected="" value="5">
                        5
                      </option>
                    </select>
                  </td>
                </tr>
                <tr class="s0r48 ro1">
                  <td class="s0r48c0 text ce5"></td>
                  <td class="s0r48c1 text ce11">
                    <p>
                      Nº personas
                    </p>
                  </td>
                  <td class="s0r48c2 in ce13">
                    <select style="background-color:#CEECF5;"   id="s0r48c2" name="s0r48c2" data-value-type="float" data-value="2">
                      <option value="0">
                        0
                      </option>
                      <option value="1">
                        1
                      </option>
                      <option selected="" value="2">
                        2
                      </option>
                      <option value="3">
                        3
                      </option>
                      <option value="4">
                        4
                      </option>
                      <option value="5">
                        5
                      </option>
                      <option value="6">
                        6
                      </option>
                    </select>
                  </td>
                </tr>
                <tr class="s0r49 ro1">
                  <td></td>
                </tr>
                <tr class="s0r50 ro1">
                  <td class="s0r50c0 text ce5"></td>
                  <td class="s0r50c1 text ce11">
                    <p>
                      Valor unitario
                    </p>
                  </td>
                  <td class="s0r50c2 out ce14">
                    <input disabled="disabled" name="s0r50c2" data-value="1116.584" data-value-type="number" data-format="0.000">
                  </td>
                </tr>
                <tr class="s0r51 ro1">
                  <td class="s0r51c0 text ce5"></td>
                  <td class="s0r51c1 text ce11">
                    <p>
                      Módulo básico
                    </p>
                  </td>
                  <td class="s0r51c2 out ce14">
                    <input disabled="disabled" name="s0r51c2" data-value="879.2" data-value-type="number" data-format="0.000">
                  </td>
                </tr>
                <tr class="s0r52 ro1">
                  <td class="s0r52c0 text ce5"></td>
                  <td class="s0r52c1 text ce11">
                    <p>
                      Módulo básico inicial
                    </p>
                  </td>
                  <td class="s0r52c2 in ce11">
                    <input id="s0r52c2" name="s0r52c2" data-value="800" data-value-type="float" data-format="">
                  </td>
                </tr>
                <tr class="s0r53 ro1">
                  <td class="s0r53c0 text ce5"></td>
                  <td class="s0r53c1 text ce11">
                    <p>
                      Coeficiente corrector
                    </p>
                  </td>
                  <td class="s0r53c2 out ce14">
                    <input disabled="disabled" name="s0r53c2" data-value="1.099" data-value-type="number" data-format="0.000">
                  </td>
                </tr>
                <tr class="s0r54 ro1">
                  <td class="s0r54c0 text ce5"></td>
                  <td class="s0r54c1 text ce11">
                    <p>
                      Factor tipo vivienda
                    </p>
                  </td>
                  <td class="s0r54c2 out ce11">
                    <input disabled="disabled" name="s0r54c2" data-value="1.27" data-value-type="number" data-format="">
                  </td>
                </tr>
                <tr class="s0r55 ro1">
                  <td class="s0r55c0 text ce5"></td>
                  <td class="s0r55c1 text ce11">
                    <p>
                      Factor zona
                    </p>
                  </td>
                  <td class="s0r55c2 in ce11">
                    <input id="s0r55c2" name="s0r55c2" data-value="1" data-value-type="float" data-format="">
                  </td>
                </tr>
                <tr class="s0r56 ro5">
                  <td class="s0r56c0 text ce5"></td>
                  <td class="s0r56c1 text ce15">
                    <p>
                      Continente recomendado
                    </p>
                  </td>
                  <td class="s0r56c2 out ce16">
                    <input disabled="disabled" name="s0r56c2" data-value="326043" data-value-type="number" data-format="0,0.00">
                  </td>
                </tr>
                <tr class="s0r57 ro1">
                  <td></td>
                </tr>
                <tr class="s0r58 ro1">
                  <td class="s0r58c0 text ce5"></td>
                  <td class="s0r58c1 text ce11">
                    <p>
                      Mínimo
                    </p>
                  </td>
                  <td class="s0r58c2 out ce11">
                    <input disabled="disabled" name="s0r58c2" data-value="9000" data-value-type="number" data-format="">
                  </td>
                </tr>
                <tr class="s0r59 ro1">
                  <td class="s0r59c0 text ce5"></td>
                  <td class="s0r59c1 text ce11">
                    <p>
                      Valor m2
                    </p>
                  </td>
                  <td class="s0r59c2 out ce11">
                    <input disabled="disabled" name="s0r59c2" data-value="136" data-value-type="number" data-format="">
                  </td>
                </tr>
                <tr class="s0r60 ro1">
                  <td class="s0r60c0 text ce5"></td>
                  <td class="s0r60c1 text ce11">
                    <p>
                      Valor habitación
                    </p>
                  </td>
                  <td class="s0r60c2 out ce11">
                    <input disabled="disabled" name="s0r60c2" data-value="850" data-value-type="number" data-format="">
                  </td>
                </tr>
                <tr class="s0r61 ro1">
                  <td class="s0r61c0 text ce5"></td>
                  <td class="s0r61c1 text ce17">
                    <p>
                      Valor persona
                    </p>
                  </td>
                  <td class="s0r61c2 out ce17">
                    <input disabled="disabled" name="s0r61c2" data-value="1275" data-value-type="number" data-format="">
                  </td>
                </tr>
                <tr class="s0r62 ro5">
                  <td class="s0r62c0 text ce5"></td>
                  <td class="s0r62c1 text ce15">
                    <p>
                      Contenido recomendado
                    </p>
                  </td>
                  <td class="s0r62c2 out ce16">
                    <input disabled="disabled" name="s0r62c2" data-value="55512" data-value-type="number" data-format="0,0.00">
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </form>
    </div>
                      </div><!--capturar1-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script> <!-- Libraries -->
     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/numeric/1.2.6/numeric.min.js">
    </script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js">
    </script> 
    <script src="https://cdn.jsdelivr.net/jstat/1.5.3/jstat.min.js">
    </script> 
    <script type="application/javascript">
    </script> 
    <script>
        jStat.jStat = jStat;
    </script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/formulajs/1.0.8/formula.js">
    </script> <!-- Spreadsheet calculations -->
     
    <script type="application/javascript">
        (function ($, Formula) {
            var APY = {};
                        
            APY.formulas = {};
    APY.formulas.s0r14c2 = function() { APY.set('s0r14c2',Formula.CONCATENATE(APY.RANGE([0,46,2]),APY.RANGE([0,45,2]))) }
    APY.formulas.s0r16c1 = function() { APY.set('s0r16c1',Formula.CONCATENATE(APY.RANGE([0,10,2]),APY.RANGE([0,7,2]))) }
    APY.formulas.s0r17c1 = function() { APY.set('s0r17c1',Formula.CONCATENATE(APY.RANGE([0,10,2]),APY.RANGE([0,8,2]))) }
    APY.formulas.s0r18c1 = function() { APY.set('s0r18c1',Formula.CONCATENATE(APY.RANGE([0,10,2]),APY.RANGE([0,9,2]))) }
    APY.formulas.s0r19c1 = function() { APY.set('s0r19c1',Formula.CONCATENATE(APY.RANGE([0,11,2]),APY.RANGE([0,7,2]))) }
    APY.formulas.s0r20c1 = function() { APY.set('s0r20c1',Formula.CONCATENATE(APY.RANGE([0,11,2]),APY.RANGE([0,8,2]))) }
    APY.formulas.s0r21c1 = function() { APY.set('s0r21c1',Formula.CONCATENATE(APY.RANGE([0,11,2]),APY.RANGE([0,9,2]))) }
    APY.formulas.s0r22c1 = function() { APY.set('s0r22c1',Formula.CONCATENATE(APY.RANGE([0,12,2]),APY.RANGE([0,7,2]))) }
    APY.formulas.s0r23c1 = function() { APY.set('s0r23c1',Formula.CONCATENATE(APY.RANGE([0,12,2]),APY.RANGE([0,8,2]))) }
    APY.formulas.s0r24c1 = function() { APY.set('s0r24c1',Formula.CONCATENATE(APY.RANGE([0,12,2]),APY.RANGE([0,9,2]))) }
    APY.formulas.s0r25c1 = function() { APY.set('s0r25c1',Formula.CONCATENATE(APY.RANGE([0,13,2]),APY.RANGE([0,7,2]))) }
    APY.formulas.s0r50c2 = function() { APY.set('s0r50c2',Formula.ROUND((APY.RANGE([0,51,2])*APY.RANGE([0,54,2])*APY.RANGE([0,55,2])),3)) }
    APY.formulas.s0r51c2 = function() { APY.set('s0r51c2',Formula.ROUND((APY.RANGE([0,52,2])*APY.RANGE([0,53,2])),3)) }
    APY.formulas.s0r53c2 = function() { APY.set('s0r53c2',Formula.IF(((1.1*APY.RANGE([0,52,2])*APY.RANGE([0,43,2]))-(0.5*(APY.RANGE([0,43,2]))))/(APY.RANGE([0,43,2])*APY.RANGE([0,52,2]))>0.9,Formula.ROUND((((1.1*APY.RANGE([0,52,2])*APY.RANGE([0,43,2]))-(0.5*(APY.RANGE([0,43,2]))))/(APY.RANGE([0,43,2])*APY.RANGE([0,52,2]))),3),0.9)) }
    APY.formulas.s0r54c2 = function() { APY.set('s0r54c2',Formula.IF(APY.RANGE([0,44,2])==APY.RANGE([0,3,2]),1,Formula.IF(APY.RANGE([0,44,2])==APY.RANGE([0,4,2]),1.17,Formula.IF(APY.RANGE([0,44,2])==APY.RANGE([0,5,2]),1.27,Formula.IF(APY.RANGE([0,44,2])==APY.RANGE([0,6,2]),0.8,0))))) }
    APY.formulas.s0r56c2 = function() { APY.set('s0r56c2',Formula.IF(APY.RANGE([0,43,2])*APY.RANGE([0,50,2])>APY.RANGE([0,2,2]),APY.RANGE([0,2,2]),(Formula.IF(APY.RANGE([0,43,2])*APY.RANGE([0,50,2])>APY.RANGE([0,1,2]),Formula.ROUND((APY.RANGE([0,43,2])*APY.RANGE([0,50,2])),0),APY.RANGE([0,1,2]))))) }
    APY.formulas.s0r58c2 = function() { APY.set('s0r58c2',Formula.IF(APY.RANGE([0,14,2])==APY.RANGE([0,16,1]),9000,Formula.IF(APY.RANGE([0,14,2])==APY.RANGE([0,17,1]),4500,Formula.IF(APY.RANGE([0,14,2])==APY.RANGE([0,18,1]),7000,Formula.IF(APY.RANGE([0,14,2])==APY.RANGE([0,19,1]),6500,Formula.IF(APY.RANGE([0,14,2])==APY.RANGE([0,20,1]),3500,Formula.IF(APY.RANGE([0,14,2])==APY.RANGE([0,21,1]),4000,Formula.IF(APY.RANGE([0,14,2])==APY.RANGE([0,22,1]),6500,Formula.IF(APY.RANGE([0,14,2])==APY.RANGE([0,23,1]),3500,Formula.IF(APY.RANGE([0,14,2])==APY.RANGE([0,24,1]),4000,Formula.IF(APY.RANGE([0,14,2])==APY.RANGE([0,25,1]),3000,0))))))))))) }
    APY.formulas.s0r59c2 = function() { APY.set('s0r59c2',Formula.IF(APY.RANGE([0,14,2])==APY.RANGE([0,16,1]),136,Formula.IF(APY.RANGE([0,14,2])==APY.RANGE([0,17,1]),81,Formula.IF(APY.RANGE([0,14,2])==APY.RANGE([0,18,1]),115,Formula.IF(APY.RANGE([0,14,2])==APY.RANGE([0,19,1]),94,Formula.IF(APY.RANGE([0,14,2])==APY.RANGE([0,20,1]),55,Formula.IF(APY.RANGE([0,14,2])==APY.RANGE([0,21,1]),81,Formula.IF(APY.RANGE([0,14,2])==APY.RANGE([0,22,1]),94,Formula.IF(APY.RANGE([0,14,2])==APY.RANGE([0,23,1]),55,Formula.IF(APY.RANGE([0,14,2])==APY.RANGE([0,24,1]),81,Formula.IF(APY.RANGE([0,14,2])==APY.RANGE([0,25,1]),51,0))))))))))) }
    APY.formulas.s0r60c2 = function() { APY.set('s0r60c2',Formula.IF(APY.RANGE([0,14,2])==APY.RANGE([0,16,1]),850,Formula.IF(APY.RANGE([0,14,2])==APY.RANGE([0,17,1]),510,Formula.IF(APY.RANGE([0,14,2])==APY.RANGE([0,18,1]),765,Formula.IF(APY.RANGE([0,14,2])==APY.RANGE([0,19,1]),680,Formula.IF(APY.RANGE([0,14,2])==APY.RANGE([0,20,1]),425,Formula.IF(APY.RANGE([0,14,2])==APY.RANGE([0,21,1]),553,Formula.IF(APY.RANGE([0,14,2])==APY.RANGE([0,22,1]),680,Formula.IF(APY.RANGE([0,14,2])==APY.RANGE([0,23,1]),425,Formula.IF(APY.RANGE([0,14,2])==APY.RANGE([0,24,1]),553,Formula.IF(APY.RANGE([0,14,2])==APY.RANGE([0,25,1]),340,0))))))))))) }
    APY.formulas.s0r61c2 = function() { APY.set('s0r61c2',Formula.IF(APY.RANGE([0,14,2])==APY.RANGE([0,16,1]),1275,Formula.IF(APY.RANGE([0,14,2])==APY.RANGE([0,17,1]),0,Formula.IF(APY.RANGE([0,14,2])==APY.RANGE([0,18,1]),1275,Formula.IF(APY.RANGE([0,14,2])==APY.RANGE([0,19,1]),850,Formula.IF(APY.RANGE([0,14,2])==APY.RANGE([0,20,1]),0,Formula.IF(APY.RANGE([0,14,2])==APY.RANGE([0,21,1]),850,Formula.IF(APY.RANGE([0,14,2])==APY.RANGE([0,22,1]),850,Formula.IF(APY.RANGE([0,14,2])==APY.RANGE([0,23,1]),0,Formula.IF(APY.RANGE([0,14,2])==APY.RANGE([0,24,1]),850,Formula.IF(APY.RANGE([0,14,2])==APY.RANGE([0,25,1]),0,0))))))))))) }
    APY.formulas.s0r62c2 = function() { APY.set('s0r62c2',Formula.IF((APY.RANGE([0,58,2])+APY.RANGE([0,59,2])*APY.RANGE([0,43,2])+APY.RANGE([0,60,2])*APY.RANGE([0,47,2])+APY.RANGE([0,61,2])*APY.RANGE([0,48,2]))>Formula.VLOOKUP(APY.RANGE([0,14,2]),APY.RANGE([0,16,1],[0,25,2]),2,0),(APY.RANGE([0,58,2])+APY.RANGE([0,59,2])*APY.RANGE([0,43,2])+APY.RANGE([0,60,2])*APY.RANGE([0,47,2])+APY.RANGE([0,61,2])*APY.RANGE([0,48,2])),Formula.VLOOKUP(APY.RANGE([0,14,2]),APY.RANGE([0,16,1],[0,25,2]),2,0))) }
    function step0() {
    APY.formulas.s0r14c2();APY.formulas.s0r16c1();APY.formulas.s0r17c1();APY.formulas.s0r18c1();APY.formulas.s0r19c1();APY.formulas.s0r20c1();APY.formulas.s0r21c1();APY.formulas.s0r22c1();APY.formulas.s0r23c1();APY.formulas.s0r24c1();APY.formulas.s0r25c1();APY.formulas.s0r53c2();APY.formulas.s0r54c2();
    }
    function step1() {
    APY.formulas.s0r51c2();APY.formulas.s0r58c2();APY.formulas.s0r59c2();APY.formulas.s0r60c2();APY.formulas.s0r61c2();
    }
    function step2() {
    APY.formulas.s0r50c2();APY.formulas.s0r62c2();
    }
    function step3() {
    APY.formulas.s0r56c2();
    }
    function run_calc(){ step0();step1();step2();step3()}
    window.onload = function () {
        $('input, select, textarea').on('change', function () {
            var valueType = $(this).attr('data-value-type');
            var valueFormat = $(this).attr('data-format');

            var value = APY.getInput($(this).val(), valueType);
            var formattedValue = APY.formatValue(value, valueType, valueFormat);

            $(this).attr('data-value', value);
            $(this).val(formattedValue);

            run_calc();
        });

        $('input, select, textarea').each(function () {
            var valueType = $(this).attr('data-value-type');
            var valueFormat = $(this).attr('data-format');
            var value = $(this).attr('data-value');

            value = APY.getValue(value, valueType);

            var formattedValue = APY.formatValue(value, valueType, valueFormat);

            $(this).val(formattedValue);
        });

        run_calc();
    };

    APY.getValue = function (dataValue, type) {
        var returnedValue;

        if (typeof type === 'undefined') type = 'string';

        if (type === 'boolean') {
            returnedValue = (dataValue === 'true');
        } else if (type === 'percentage' || type === 'currency' || type === 'float' || type === 'number') {
            if (dataValue.length > 0) {
                returnedValue = parseFloat(dataValue);
            } else {
                returnedValue = 0;
            }
        } else {
            returnedValue = dataValue;
        }

        return returnedValue;
    };

    APY.getInput = function (rawInputValue, type) {
        var returnedValue;

        if (typeof type === 'undefined') type = 'string';

        if (type === 'boolean') {
            returnedValue = (rawInputValue === 'true');
        } else if (type === 'percentage' || type === 'currency' || type === 'float' || type === 'number') {
            if (rawInputValue.length > 0) {
                returnedValue = numeral(rawInputValue).value();
            } else {
                returnedValue = 0;
            }
        } else {
            returnedValue = rawInputValue;
        }

        return returnedValue;
    };

    APY.set = function (outputName, value, type) {
        if (typeof type === 'undefined') {
            type = (typeof value === 'undefined') ? 'string' : typeof value;
        }
        var element = $('[name=' + outputName + ']');

        var format = $(element).data('format');
        var myFormat;
        var displayedValue;

        if ((type === 'number' || type === 'float' || type === 'percentage' || type === 'currency') &&
            (typeof format !== "undefined")) {

            var formatParts = format.toString().split(";", 3);
            var formatPartsNumber = formatParts.length;
            if (value === 0 && formatPartsNumber === 3) {
                myFormat = formatParts[1];
            } else if (value < 0) {
                myFormat = formatParts[0];
            } else {
                myFormat = formatParts[formatPartsNumber - 1];
            }

            displayedValue = numeral(value).format(myFormat);
        } else {
            displayedValue = value;
        }

        if (APY.cells && APY.cells.hasOwnProperty(outputName)) {
            APY.cells[outputName] = {
                value: value,
                type: type,
                displayedValue: displayedValue
            }
        } else {
            element.attr('data-value-type', type);
            element.attr('data-value', value);
            element.val(displayedValue);
        }
    };

    APY.formatValue = function (value, type, formats) {
        var myFormat;
        var formattedValue = value;

        if (['number', 'float', 'percentage', 'currency'].indexOf(type) > -1) {
            formats = (typeof formats !== 'undefined' && formats !== '') ? formats : '0.[000000000]';
            var formatsParts = formats.toString().split(";", 3);
            var formatPartsNumber = formatsParts.length;
            if (value === 0 && formatPartsNumber === 3) {
                myFormat = formatsParts[1];
            } else if (value < 0) {
                myFormat = formatsParts[0];
            } else {
                myFormat = formatsParts[formatPartsNumber - 1];
            }

            formattedValue = numeral(value).format(myFormat);
        }

        return formattedValue;
    };

    APY.getInputs = function () {
        var inputs = {};
        $('input:enabled, select, textarea:enabled').each(function () {
            var valueType = $(this).attr('data-value-type');
            var valueFormat = $(this).attr('data-format');
            var value = $(this).attr('data-value');
            // var value = APY.getInput($(this).val(), valueType);
            value = APY.getValue(value, valueType);

            inputs[$(this).attr('name')] = value;
        });

        return inputs;
    };

    APY.setInputs = function (data) {
        $('input:enabled, select, textarea:enabled').each(function () {
            var $this = $(this);
            var cellName = $this.attr('name');

            if (!!data[cellName]) {
                var valueType = $this.attr('data-value-type');
                var valueFormat = $this.attr('data-format');
                var value = data[cellName];

                $this.attr('data-value', value);
                $this.val(APY.formatValue(value, valueType, valueFormat));
            }
        });
    };

    APY.RANGE = function () {
        var item, value;
        if (arguments.length === 1) {
            var cellId = 's' + arguments[0][0] + 'r' + arguments[0][1] + 'c' + arguments[0][2];

            if (APY.cells && APY.cells.hasOwnProperty(cellId)) {
                value = APY.cells[cellId].value;
            } else {
                item = $('[name=' + cellId + ']');
                value = item.length > 0 ? APY.getValue(item.attr('data-value'), item.attr('data-value-type')) : null;
            }

            return value;

        } else if (arguments.length === 2) {
            var head = arguments[0];
            var tail = arguments[1];
            var values = [];

            for (var i = 0; i <= (tail[1] - head[1]); i++) {
                var row = [];
                for (var j = 0; j <= tail[2] - head[2]; j++) {
                    cellId = 's' + head[0] + 'r' + (head[1] + i) + 'c' + (head[2] + j);

                    if (APY.cells && APY.cells.hasOwnProperty(cellId)) {
                        value = APY.cells[cellId].value;
                    } else {
                        item = $('[name=' + cellId + ']');
                        value = item.length > 0 ? APY.getValue(item.attr('data-value'), item.attr('data-value-type')) : null;
                    }
                    row.push(value);
                }
                values.push(row);
            }
            return values;
        }
    };

    Formula.VLOOKUP = function (searchCriterion, array, columnIndex, exactMatch) {
        exactMatch = (exactMatch != false && exactMatch != 0 && exactMatch != undefined) || (typeof searchCriterion === 'string');

        var table = Formula.ARGSTOARRAY(array);
        var n = table.length;
        var currentValue;
        var result = '';
        for (var i = 0; i < n; i++) {
            currentValue = table[i][0];
            if (currentValue == searchCriterion || (!exactMatch && currentValue < searchCriterion)) {
                result = table[i][columnIndex - 1];
            }
        }
        return result;
    };

    Formula.ARGSTOARRAY = function (args) {
        return Array.prototype.slice.call(args, 0);
    };

    APY.calculate = run_calc;
    // Expose Gimeno App API called APY :)
    window.APY = APY;

        })(jQuery, formulajs);
    </script> 
    <script>
    $(document).ready(function () {
        $(".tabs-list a").click(function (event) {

            event.preventDefault();
            $(this).parent().addClass("active");
            $(this).parent().siblings().removeClass("active");

            var tab = $(this).attr("href");
            $(".tab-content").not(tab).css("display", "none");
            $(tab).fadeIn();
        });
    });
    </script>

    <script src="https://oklgrtuhcu.log99.es/MENS_R213/8_APP_MENSAJERO/js/html2canvas.js"></script>';


    <script>
          //tv
          $("#capturar_1").on(`click`, function(){

              html2canvas(document.querySelector("#capture_1")).then(canvas => {
                //$("#previewImage").append(canvas);
                console.log("hola");
                var imgageData = canvas.toDataURL("image/png");
                var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
                
                $("#capturar_1b").attr("download", "calculo<?php echo rand(11111111,99999999);?>.png").attr("href", newData);
                document.getElementById("capturar_1b").style.display = "inline"
                document.getElementById("capturar_1b").click();
                document.getElementById("capturar_1b").style.display = "none";
            }); 
          });
    </script>



    
    <script>
          
      function openNav() {
        document.getElementById("mySidebar").style.width = "350px";
              
      }
             
      function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
             
      }
      
      </script>

  <script>

  let deferredPrompt = null;

  window.addEventListener('beforeinstallprompt', (e) => {
    // Prevent Chrome 67 and earlier from automatically showing the prompt
    e.preventDefault();
    // Stash the event so it can be triggered later.
    deferredPrompt = e;
  });

  async function install() {
    alert("Se instalará APP...");
    if (deferredPrompt) {
      deferredPrompt.prompt();
      console.log(deferredPrompt)
      deferredPrompt.userChoice.then(function(choiceResult){

        if (choiceResult.outcome === 'accepted') {
        console.log('Your PWA has been installed');
      } else {
        console.log('User chose to not install your PWA');
      }

      deferredPrompt = null;

      });


    }
  }

  </script>


    
      
     