@extends('first_layout.base')
@section('content')
        <section id="section-content" class="content page-16 moto-section" data-widget="section" data-container="section">
            <div class="moto-widget moto-widget-block moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto" data-widget="block" data-spacing="lala" style="background-image:url(/mt-demo/65200/65298/mt-content/uploads/2017/12/mt-1270-content-bg01.jpg);background-position:top;background-repeat:no-repeat;background-size:cover;padding-bottom:10px;padding-top:70px" data-bg-image="2017/12/mt-1270-content-bg01.jpg">

                <div class="container-fluid">
                    <div class="row">
                        <div class="moto-cell col-sm-12" data-container="container">

                            <div class="moto-widget moto-widget-row row-fixed moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-spacing="aaaa" style="">

                                <div class="container-fluid">
                                    <div class="row" data-container="container">

                                        <div class="moto-widget moto-widget-row__column moto-cell col-sm-6 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa">

                                        </div>

                                        <div class="moto-widget moto-widget-row__column moto-cell col-sm-6 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa">

                                            <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aasa" data-animation="">
                                                <div class="moto-widget-text-content moto-widget-text-editable">
                                                    <p class="moto-text_system_2">READ ABOUT ME</p>
                                                    <p class="moto-text_system_5">CONTACTS</p>
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
            <div class="moto-widget moto-widget-block moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto" data-widget="block" data-spacing="lala" style="">

                <div class="container-fluid">
                    <div class="row">
                        <div class="moto-cell col-sm-12" data-container="container">

                            <div class="moto-widget moto-widget-row row-fixed moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-spacing="aaaa" style="">

                                <div class="container-fluid">
                                    <div class="row" data-container="container">

                                        <div class="moto-widget moto-widget-row__column moto-cell col-sm-3 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa">

                                        </div>
                                        <div class="moto-widget moto-widget-row__column moto-cell col-sm-6 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa">

                                            <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aama" data-animation="">
                                                <div class="moto-widget-text-content moto-widget-text-editable">
                                                    <p class="moto-text_system_14" style="text-align: center;">Get in touch</p>
                                                </div>
                                            </div>
                                            <div data-widget-id="wid_1512476994_yxsgg3iqj" class="moto-widget moto-widget-contact_form moto-preset-default moto-spacing-top-auto moto-spacing-right-medium moto-spacing-bottom-auto moto-spacing-left-medium  " data-preset="default" data-widget="contact_form" data-spacing="amam">
                                                <div ng-controller="widget.ContactForm.Controller" ng-init="hash = '2@eyJoIjoiTlFBZ0h1MFBPSlhMc0E5ZERVT0ZrRU9aMjBlZkY1SDJIdm43dHBQckd6az0iLCJpIjoiUlcxOFZ1V3RsN2JESTNCQW10ZUJGUT09IiwidiI6ImQyb2lpZzVpcjBTWGtySG1Mbmd3Yk9UMFZqdU5hXC9LZkNEaCtPMjk4UDhHQWpsNlwvVEgwMmYzRmRXQ0k0R2VhMDJMeVMydkhMZWk1d2doMVo4Z0NCTkE9PSJ9';actionAfterSubmission={&quot;action&quot;:&quot;none&quot;,&quot;url&quot;:&quot;&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;id&quot;:&quot;&quot;};resetAfterSubmission=false">
                                                    <form class="moto-widget-contact_form-form" role="form" name="contactForm" ng-submit="submit()" novalidate>
                                                        <div ng-show="sending" class="contact-form-loading"></div>

                                                        <div class="moto-widget-contact_form-group">
                                                            <label for="field_name" class="moto-widget-contact_form-label">Name</label>
                                                            <input type="text" class="moto-widget-contact_form-field moto-widget-contact_form-input" placeholder="Name *" ng-blur="validate('name')" required ng-model-options="{ updateOn: 'blur' }" name="name" id="field_name" ng-model="message.name" />
                                                            <span class="moto-widget-contact_form-field-error ng-cloak" ng-cloak ng-show="contactForm.name.$invalid && !contactForm.name.$pristine && !contactForm.name.emailInvalid">Field is required</span>
                                                        </div>

                                                        <div class="moto-widget-contact_form-group">
                                                            <label for="field_email" class="moto-widget-contact_form-label">Email</label>
                                                            <input type="text" class="moto-widget-contact_form-field moto-widget-contact_form-input" placeholder="Email *" ng-blur="validate('email')" required ng-model-options="{ updateOn: 'blur' }" name="email" id="field_email" ng-model="message.email" />
                                                            <span class="moto-widget-contact_form-field-error ng-cloak" ng-cloak ng-show="contactForm.email.$invalid && !contactForm.email.$pristine && !contactForm.email.emailInvalid">Field is required</span>
                                                            <span class="moto-widget-contact_form-field-error ng-cloak" ng-cloak ng-show="contactForm.email.emailInvalid && !contactForm.email.$pristine">Incorrect email</span>
                                                        </div>

                                                        <div class="moto-widget-contact_form-group">
                                                            <label for="field_phone" class="moto-widget-contact_form-label">Phone</label>
                                                            <input type="text" class="moto-widget-contact_form-field moto-widget-contact_form-input" placeholder="Phone " ng-model-options="{ updateOn: 'blur' }" name="phone" id="field_phone" ng-model="message.phone" />
                                                            <span class="moto-widget-contact_form-field-error ng-cloak" ng-cloak ng-show="contactForm.phone.$invalid && !contactForm.phone.$pristine && !contactForm.phone.emailInvalid">Field is required</span>
                                                        </div>

                                                        <div class="moto-widget-contact_form-group">
                                                            <label for="field_message" class="moto-widget-contact_form-label">Message</label>
                                                            <textarea class="moto-widget-contact_form-field moto-widget-contact_form-textarea" rows="3" placeholder="Message *" ng-blur="validate('message')" required ng-model-options="{ updateOn: 'blur' }" name="message" id="field_message" ng-model="message.message"></textarea>
                                                            <span class="moto-widget-contact_form-field-error ng-cloak" ng-cloak ng-show="contactForm.message.$invalid && !contactForm.message.$pristine">Field is required</span>
                                                        </div>

                                                        <div class="moto-widget-contact_form-success ng-cloak" ng-cloak ng-show="emailSent">
                                                            Your message was sent successfully
                                                        </div>
                                                        <div class="moto-widget-contact_form-danger ng-cloak" ng-cloak ng-show="emailError">
                                                            Sorry, your message was not sent
                                                        </div>
                                                        <div class="moto-widget-contact_form-buttons">

                                                            <div class="moto-widget moto-widget-button moto-preset-default moto-align-center" data-preset="default" data-align="center">
                                                                <a ng-click="submit();" class="moto-widget-button-link moto-size-medium" data-size="medium"><span class="fa moto-widget-theme-icon"></span><span class="moto-widget-button-label">SEND MESSAGE</span></a>
                                                            </div>
                                                            <button type="submit" class="hidden"></button>

                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="moto-widget moto-widget-row__column moto-cell col-sm-3 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa">

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

  @endsection
