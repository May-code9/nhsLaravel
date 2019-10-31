@extends('layouts.master')
@section('content')

<div class="page-header">
  <div class="container">
    <div class="page-header-inner">
      <ol class="breadcrumb wow fadeInDown" data-wow-delay="300ms">
        <li><a href="index.php">Home</a></li>
        <li class="page">Schedule</li>
      </ol>
      <h1 class="page-title wow fadeInRight" data-wow-delay="300ms">
        Schedule
      </h1>
    </div>
  </div>
</div>

<section id="schedule" class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="section-title wow fadeInUp" data-wow-delay="0s">Schedule</h2>

        <div class="main-board wow fadeInDown" data-wow-delay="0.3s">

          <ul class="nav nav-tabs day" role="tablist">
            <li role="presentation" class="active"><a href="#day1" aria-controls="day1" role="tab" data-toggle="tab">04 NOV <br> <span>DAY 01</span></a></li>
            <li role="presentation"><a href="#day2" aria-controls="day2" role="tab" data-toggle="tab">05 NOV <br> <span>DAY 02</span> </a></li>
            <li role="presentation"><a href="#day3" aria-controls="day3" role="tab" data-toggle="tab">06 NOV <br> <span>DAY 03</span></a></li>
            <li role="presentation"><a href="#day4" aria-controls="day4" role="tab" data-toggle="tab">07 NOV <br> <span>DAY 04</span></a></li>
            <li role="presentation"><a href="#day5" aria-controls="day5" role="tab" data-toggle="tab">08 NOV <br> <span>DAY 05</span></a></li>
          </ul>

          <div class="tab-content">

            <div role="tabpanel" class="tab-pane active" id="day1">
              <div class="row">
                <div class="col-md-12 board text-center">
                  <div class="column-1 col-md-3 col-sm-5">
                    <ul class="nav nav-pills event-time-list">
                      <li><a href="#">Time</a>
                        <ul>
                          <li class="color-4"><a href="#">All Day</a></li>

                        </ul>
                      </li>
                    </ul>
                  </div>

                  <div class="col-md-4 col-sm-12">
                    <div class="member jon">
                      <div class="button">
                        <a href="#" class="btn-large bg-3"><img src="assets/img/microphone.png" alt=""> Arrival</a>
                      </div>
                      <p>Commonwealth Medical Association(CMA)Executive Committee & Council Meeting &amp; Arrival of Delegates for NHS</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div role="tabpanel" class="tab-pane" id="day2">
              <div class="row">
                <div class="col-md-12 board text-center">
                  <h2>Opening  Ceremony  of  National Health Summit (NHS)</h2>
                  <br>
                  <div class="column-1 col-md-3 col-sm-5">
                    <ul class="nav nav-pills event-time-list">
                      <li><a href="#">Time</a>
                        <ul>
                          <li class="color-1"><a href="#">9am - 10:30am</a></li>
                          <li class="color-2"><a href="#">10:30am - 11am</a></li>
                          <li class="color-3"><a href="#">11am - 2pm</a></li>
                          <li class="color-4"><a href="#">3pm - 5pm</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-4 col-sm-6">
                    <div class="member stephen">
                      <div class="button">
                        <a href="#" class="btn-large bg-1"><img src="assets/img/microphone.png" alt=""></a>
                      </div>
                      <p style="margin-top: 30px">
                        <ul>
                          <li style="list-style: circle; text-align: left;margin-left:10px">Appraisal of the deliverables from 1st NHS; <strong> Dr Osahon Enabulele</strong></li>
                          <li style="list-style: circle; text-align: left;margin-left:10px">Sponsored Presentations (x2 - 3 presentations)</li>
                        </ul>
                      </p>
                    </div>
                    <div class="member" style="background: transparent; margin-bottom: 10px">
                      <div class="button">
                        <a href="#" class="btn-large bg-2"><img src="assets/img/coffee-cup.png" alt="">Tea Break</a>
                      </div>
                    </div>
                    <div class="member jon">
                      <div class="button">
                        <a href="#" class="btn-large bg-5"><img src="assets/img/microphone.png" alt=""></a>
                      </div>
                      <h5 style="margin-top: 30px">Joint Opening Ceremony of the 2nd NHS &amp; CMA triennial Conference</h5>
                        <ul style="">
                          <li style="list-style: circle; text-align: left;margin-left:10px">Keynote speech on the theme: <strong>Gov. Ifeanyi Okowa</strong> </li>
                          <li style="list-style: circle; text-align: left;margin-left:10px">Health care delivery; UAE experience: <strong>UAE Health Minister</strong> </li>
                          <li style="list-style: circle; text-align: left;margin-left:10px">Address/Goodwill messages</li>
                          <li style="list-style: circle; text-align: left;margin-left:10px">Investiture of the newly elected President, Commonwealth Medical Association</li>
                        </ul>
                    </div>
                  </div>

                  <div class="col-md-4 col-sm-12">
                    <div class="member jon">
                      <div class="button">
                        <a href="#" class="btn-large bg-3"><img src="assets/img/microphone.png" alt=""></a>
                      </div>
                      <h5 style="margin-top: 30px">NHS Panel Discussion</h5>
                      <p style="margin-top: 0px; text-align: left">Sub- theme; Improving the Nigerian Health Indices <br> Panelists: </p>
                      <ul style="margin-top:-30px">
                        <li style="list-style: circle; text-align: left;margin-left:10px">Prof  O. Lilly-Tariah (NPMCN President)</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Dr Faisal Shuaib (Executive Director NPHCDA)</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Dr Chikwe Ihekweazu (DG NCDC)</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Prince Julius Adelusi-Adeluyi (former Minister of Health)</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Prof.  M. Adeyeye (DG NAFDAC)</li>
                      </ul>
                      <hr style="border-top: 1px solid #777">
                      <h5>CMA Plenary</h5>
                      <ul >
                        <li style="list-style: circle; text-align: left;margin-left:10px">Fast-tracking the attainment of UHC in the Commonwealth; Dr Tonnie Okoye</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Advancing UHC coverage: Prof Vajira Dissanayake</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Physician well-being in the Commonwealth- the role of CMA: Prof. Sundaram Arulrhaj</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Prince Julius Adelusi-Adeluyi (former Minister of Health)</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Health human resource crisis in the Commonwealth: Prof Rowland Ndoma Egba</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div role="tabpanel" class="tab-pane" id="day3">
              <div class="row">
                <div class="col-md-12 board text-center">
                  <div class="column-1 col-md-3 col-sm-5">
                    <ul class="nav nav-pills event-time-list">
                      <li><a href="#">Time</a>
                        <ul>
                          <li class="color-1"><a href="#">8am - 9am</a></li>
                          <li class="color-2"><a href="#">9am - 11am</a></li>
                          <li class="color-3"><a href="#">11am - 11:30am</a></li>
                          <li class="color-4"><a href="#">11:30am – 2pm</a></li>
                          <li class="color-5"><a href="#">3pm - 5pm</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-4 col-sm-6">
                    <div class="member stephen">
                      <div class="button">
                        <a href="#" class="btn-large bg-1"><img src="assets/img/microphone.png" alt=""></a>
                      </div>
                      <p style="margin-top: 30px">Executive Symposium/Breakfast Meeting</p>
                    </div>
                    <div class="member jeson">
                      <div class="button">
                        <a href="#" class="btn-large bg-2"><img src="assets/img/microphone.png" alt=""></a>
                      </div>
                      <h4>Parallel Sessions</h4>
                      <h5 style="text-align: left">Capacity building in the health sector.(Chairman; Prof Eugene Okpere) <br> Speakers:</h5>
                      <ul>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Prof. Akin Osibogun: “Capacity building in the health sector- role of government”</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Prof. Ikpeme Ikpeme: “Capacity building in the health sector – role of institutional administrators”</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Dr Charmaine Emelife: “Capacity building in the health sector – role of international collaboration”</li>
                      </ul>
                      <hr style="border-top: 1px solid #777">
                      <h5 style="text-align: left">Team work & inter- professional relationships (Chairman; Prof E. J. C Nwana)<br> Speakers:</h5>
                      <ul>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Prof. Titus  Ibekwe: “Team work & inter- professional relationships – the place of leadership”</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Prof. Mike Asuzu: “Cultivating effective Teamwork & Inter-Professional relationship”</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Prof. King David Yawe: “Team work & inter- professional relationships – conflict resolution ”</li>
                      </ul>
                      <hr style="border-top: 1px solid #777">
                      <h5 style="text-align: left">Translating research to health policy & implementation (Chairman; Prof Sunday Bwala) <br> Speakers:</h5>
                      <ul>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Prof.  B. Salako: “Translating research to health policy & implementation – role of research institutions”</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Prof A. N. Odili “Translating research to health policy & implementation – potential hindrances”</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Prof. Adebola  Ogunbiyi “Translating research to health policy & implementation – the researcher’s role”</li>
                      </ul>
                      <h5>{Sponsored Presentations- silver}</h5>
                    </div>
                  </div>

                  <div class="col-md-4 col-sm-12">
                    <div class="member" style="background: transparent; margin-bottom: 10px">
                      <div class="button">
                        <a href="#" class="btn-large bg-5"><img src="assets/img/coffee-cup.png" alt="">Tea Break</a>
                      </div>
                    </div>
                    <div class="member jon">
                      <div class="button">
                        <a href="#" class="btn-large bg-3"><img src="assets/img/microphone.png" alt=""></a>
                      </div>
                      <h4 style="margin-top: 10px">Plenary & Panel 1</h4>
                      <h5 style="text-align: left">Sub-theme; Inter-professional relationship <br> Plenary:  (Prof. Eugene Okpere  & Dr. Oloreigbe)</h5>
                      <p style="text-align: left; margin-top: 5px; margin-bottom: 5px">{Sponsored Presentation- gold/diamond} <br>Panelists: President or Nominee of </p>
                      <ul>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Mrs Eugenia Abu</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Prince Julius Adelusi-Adeluyi</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Dr Francis Faduyile (NMA President)</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">NANNM  President</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Mr Julius Agwu</li>
                      </ul>
                    </div>
                    <div class="member jon">
                      <div class="button">
                        <a href="#" class="btn-large bg-4"><img src="assets/img/microphone.png" alt=""></a>
                      </div>
                      <h4 style="margin-top: 10px">Panel 2</h4>
                      <h5 style="text-align: left">Sub-theme; Brain drain & Brain Gain</h5>
                      <ul>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Dr. Emeka Okor</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Dr. Charmaine Emelife (ANPA President)</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Prof. E.J.C Nwana</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Prof O.G.B Nwarogu</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div role="tabpanel" class="tab-pane" id="day4">
              <div class="row">
                <div class="col-md-12 board text-center">
                  <div class="column-1 col-md-3 col-sm-5">
                    <ul class="nav nav-pills event-time-list">
                      <li><a href="#">Time</a>
                        <ul>
                          <li class="color-1"><a href="#">8am - 9am</a></li>
                          <li class="color-2"><a href="#">9am - 11am</a></li>
                          <li class="color-3"><a href="#">11am - 11:30am</a></li>
                          <li class="color-4"><a href="#">11:30am – 2pm</a></li>
                          <li class="color-5"><a href="#">3pm - 5pm</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-4 col-sm-6">
                    <div class="member stephen">
                      <div class="button">
                        <a href="#" class="btn-large bg-1"><img src="assets/img/microphone.png" alt=""></a>
                      </div>
                      <h4>PURE</h4>
                      <p style="margin-top: -10px">Executive Symposium/Breakfast Meeting</p>
                    </div>
                    <div class="member jeson">
                      <div class="button">
                        <a href="#" class="btn-large bg-2"><img src="assets/img/microphone.png" alt=""></a>
                      </div>
                      <h5 style="margin-top: 30px; text-align:left">Health Policy & Mgt (Chairman; Prof M. Asuzu) <br> Speakers: </h5>
                      <ul>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Prof. Obinna Onwujekwe: “Politics of Health Policy”</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Prof.  K. Osungbade: “Principles in Health Economics & Policy”</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Dr M. J Saka “Principles of Health Policy and Health Sciences Management”</li>
                      </ul>
                      <hr style="border-top: 1px solid #777">
                      <h5 style="text-align:left">Medical jurisprudence (Chairman; Prof Musa Mohammed Borodo) <br> Speakers:</h5>
                      <ul>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Prof. Uwakwe  Abugu “Contrasting medical malpractices & negligence; the viewpoint of the Nigerian law”.</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Dr. Enejo Abdul “The rights of patients and medical personnel in abuse”</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">NBA Chairman FCT “Creating a balance between quality of healthcare and litigation ”</li>
                      </ul>
                      <hr style="border-top: 1px solid #777">
                      <h5 style="text-align:left">Healthcare financing  (Chairman; Prof Akin Osibogun) Speakers:</h5>
                      <ul>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Dr. Francis Ukwuije “Tension between basic family needs & out of pocket financing for health- can community health insurance offer any help? ”</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Dr.  Tonnie Okoye Healthcare financing”</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Prof. Ngim Ngim “National Health Insurance Scheme coverage; challenges & prospects”</li>
                      </ul>
                      <h5>{Sponsored Presentations- silver}</h5>
                    </div>
                  </div>

                  <div class="col-md-4 col-sm-12">
                    <div class="member" style="background: transparent; margin-bottom: 10px">
                      <div class="button">
                        <a href="#" class="btn-large bg-5"><img src="assets/img/coffee-cup.png" alt="">Tea Break</a>
                      </div>
                    </div>
                    <div class="member jon">
                      <div class="button">
                        <a href="#" class="btn-large bg-3"><img src="assets/img/microphone.png" alt=""></a>
                      </div>
                      <h4 style="text-align: left">Sub-theme; Universal health coverage</h4>
                      <h5 style="text-align: left">Plenary- WHO Country Director and Dr. Tanko Sununu <br> {Sponsored presentation; gold/diamond} </h5>
                      <ul>
                        Panelists-
                        <li style="list-style: circle; text-align: left;margin-left:10px">Prof Mohammed Sambo (NHIS Executive Secretary)</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Alhaji Abdulaziz Mashi Abdullahi (Permanent Secretary, Federal Ministry of Health)</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Dr. Kayode Obembe</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Dr. Hadiza S. Balarabe (Deputy Governor Kaduna state) </li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Dr. Danfulani</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Dr Mma Wokocha</li>
                      </ul>
                    </div>
                    <div class="member jon">
                      <div class="button">
                        <a href="#" class="btn-large bg-4"><img src="assets/img/microphone.png" alt=""></a>
                      </div>
                      <h5 style="margin-top: 30px; text-align: left">Joint NPMCN-MDCN Symposium/ Interactive session of Professional  Health Associations/ City Tour</h5>
                      <hr style="border-top: 1px solid #777">
                      <h5 style="margin-top: 10px; text-align: left">Symposium topic; Medical Practice Expectations, Limitations & Guidelines <br> (chair: Prof O. B. da Lilly-Tariah , NPMCN President ) <br> Speakers:</h5>
                      <ul>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Dr T A B Sanusi ( MDCN Registrar) “Practice expectations and limitation of MBBS holders”</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Prof O. Udofia (NPMCN Registrar) “Practice expectations & limitation of in various medical specialties”</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Prof Wasiu Adeyemo :”Practice  expectations & limitation of BDS holder, Specialist in Family Dentistry and Dental surgery</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Prof Musa Mohammed Borodo “Practice expectations &limitation of Diploma Holder, certificate  holders, Part 1 & membership in independent Practice</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Prof S. Anyanwu “Practice definition  & Concept  Licensure, Credentialing, Proctoring, Privilege  etc</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Prof Ken Ozoilo; role of professional medical associations in standardization &  quality control of  medical practice</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Prof Mike Ogirima; sub-specializations In medicine as a panacea for Quality  healthcare delivery; problems & prospects</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div role="tabpanel" class="tab-pane" id="day5">
              <div class="row">
                <div class="col-md-12 board text-center">
                  <div class="column-1 col-md-3 col-sm-5">
                    <ul class="nav nav-pills event-time-list">
                      <li><a href="#">Time</a>
                        <ul>
                          <li class="color-1"><a href="#">8am - 9am</a></li>
                          <li class="color-2"><a href="#">9am - 11am</a></li>
                          <li class="color-3"><a href="#">11am - 11:30am</a></li>
                          <li class="color-4"><a href="#">11:30am – 2pm</a></li>
                          <li class="color-5"><a href="#">3pm - 5pm</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-4 col-sm-6">
                    <div class="member stephen">
                      <div class="button">
                        <a href="#" class="btn-large bg-1"><img src="assets/img/microphone.png" alt=""></a>
                      </div>
                      <p style="margin-top: 30px">Executive Symposium/Breakfast Meeting</p>
                    </div>
                    <div class="member jeson">
                      <div class="button">
                        <a href="#" class="btn-large bg-2"><img src="assets/img/microphone.png" alt=""></a>
                      </div>
                      <h5 style="margin-top: 30px; text-align:left">PPP (Chairman; Dr IbrahimWada) <br> Speakers: </h5>
                      <ul>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Dr. Ogedegbe “The financial & economic implications of PPP; integrating  grants financing & PPP objectives”</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Dr Christopher Otabor; PPP structures, suitability & success factors; the role of legal & regulatory structure</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Prof. Ahmed Ahidjo “Conception, planning & implementation of PPP”</li>
                      </ul>
                      <h5>{Sponsored Presentations- silver}</h5>
                      <hr style="border-top: 1px solid #777">
                      <h5 style="text-align:left">Medical ethics (Chairman: Prof S.C. Ohaegbulam) <br> Speakers:</h5>
                      <ul>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Prof. Ade Malomo “Medical Ethics; challenges  with new procedures/innovations in medicine”</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Dr. Mma Wokocha “Medical Ethics and efficient patient care”</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Dr. T. A. B Sanusi (MDCN Registrar) “Medical Ethics – perspectives from the stable of a regulator”</li>
                      </ul>
                      <h5>{Sponsored Presentations- silver}</h5>
                      <hr style="border-top: 1px solid #777">
                      <h5 style="text-align:left">Curriculum development, medical education  & effective healthcare delivery (Chairman; Prof Stanley Anyanwu) <br> Speakers:</h5>
                      <ul>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Prof Abubakar Rasheed (NUC ES) “Curriculum Development & Impact on Healthcare delivery”</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Dr N. Nwakanma (MDCN Deputy Registrar) “Medical Education & Effective Healthcare Delivery”</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Prof O. Udofia (Registrar NPMCN) “Development of Postgraduate medical curriculum and meeting the needs of the Nigerian healthcare system”</li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-12">
                    <div class="member" style="background: transparent; margin-bottom: 10px">
                      <div class="button">
                        <a href="#" class="btn-large bg-5"><img src="assets/img/coffee-cup.png" alt="">Tea Break</a>
                      </div>
                    </div>
                    <div class="member jon">
                      <div class="button">
                        <a href="#" class="btn-large bg-3"><img src="assets/img/microphone.png" alt=""></a>
                      </div>
                      <h4 style="text-align: left">Sub-theme; Public-private partnership</h4>
                      <h5 style="text-align: left">Plenary: Drs. Ibrahim Wada &  Adeleke Mamora <br> {Sponsored presentation; gold/diamond} </h5>
                      <ul>
                        Panelists-
                        <li style="list-style: circle; text-align: left;margin-left:10px">Prof Ahmed Ahidjo</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Dr. Igwilo</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Mrs. Clare Omatseye</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Prof Ed. Nwobodo</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Dr Chidi Izuwah (DG Infrastructure  Concession Regulatory Commission)</li>
                      </ul>
                    </div>
                    <div class="member jon">
                      <div class="button">
                        <a href="#" class="btn-large bg-4"><img src="assets/img/microphone.png" alt=""></a>
                      </div>
                      <h5 style="margin-top: 30px; text-align: left">Sub-theme; Reversing Medical tourism </h5>
                      <ul>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Prof. S. C. Ohaegbulam</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Dr Charmaine Emelife</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Dr. JAF Momoh</li>
                        <li style="list-style: circle; text-align: left;margin-left:10px">Dr. Ibalibo Banigo(Deputy Gov. Rivers state)</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </div>
  </div>
</section>


<section id="intro" class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-8 col-xs-12">
        <div class="content-text">
          <h2>ARE YOU READY FOR NHS CONFERENCE?</h2>
          <p class="text">If you have not registered, click the <strong>Register Today</strong> button, if you have registered, click <strong>Accomodation</strong> button to view available hotels with discount.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12 text-right">
        <a href="{{ route('nma.tickets') }}" class="btn-cta btn btn-common"><i class="icon-control-play"></i> Register Today</a>
        <a href="{{ route('nma.accomodation') }}" class="btn-cta btn btn-common"><i class="icon-control-play"></i> Accomodation</a>
      </div>
    </div>
  </div>
</section>

@endsection
