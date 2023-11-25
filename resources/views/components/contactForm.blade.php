<section
    class="elementor-section elementor-top-section elementor-element elementor-element-d71ff12 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
    data-id="d71ff12" data-element_type="section">
    <div class="elementor-container elementor-column-gap-no">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-48115e6"
             data-id="48115e6" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-2f729bf elementor-widget elementor-widget-heading"
                     data-id="2f729bf" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container" style="margin: auto;text-align: center">
                        <h2 class="elementor-heading-title elementor-size-default">Contact Us</h2></div>
                </div>
                <div class="elementor-element elementor-element-c16e003 elementor-widget elementor-widget-text-editor"
                     data-id="c16e003" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container" style="margin: auto;text-align: center;width: 50%">
                        <style>/*! elementor - v3.16.0 - 20-09-2023 */
                            .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                background-color: #69727d;
                                color: #fff
                            }

                            .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                color: #69727d;
                                border: 3px solid;
                                background-color: transparent
                            }

                            .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                margin-top: 8px
                            }

                            .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                width: 1em;
                                height: 1em
                            }

                            .elementor-widget-text-editor .elementor-drop-cap {
                                float: left;
                                text-align: center;
                                line-height: 1;
                                font-size: 50px
                            }

                            .elementor-widget-text-editor .elementor-drop-cap-letter {
                                display: inline-block
                            }</style>
                        We’re eager to hear from you! Whether you have inquiries about our services, need assistance, or
                        want to discuss a potential collaboration, our team is here to assist. Reach out via the
                        <strong>Contact form</strong> , and we’ll respond promptly. Your journey towards impactful
                        influencer marketing begins here!
                    </div>
                </div>
                <section
                    class="elementor-section elementor-inner-section elementor-element elementor-element-c3ea9f9 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="c3ea9f9" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div
                            class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-ba216a3"
                            data-id="ba216a3" data-element_type="column"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div
                                    class="elementor-element elementor-element-f774ebb elementor-widget elementor-widget-wpforms"
                                    data-id="f774ebb" data-element_type="widget" data-widget_type="wpforms.default">
                                    <div class="elementor-widget-container">
                                        @if(session('success'))
                                            <div class="alert alert-success mt-3"
                                                 style="text-align: center;color: #FF793D;">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                        @if ($errors->any())
                                            <div class="alert alert-danger mt-3">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <div class="wpforms-container " id="wpforms-473"
                                             style="margin: auto;width: 50%;align-content: center;align-items: center">
                                            <form id="wpforms-form-473"
                                                  class="wpforms-validate wpforms-form wpforms-ajax-form" method="post"
                                                  action="{{route('messages.storeGuest')}}">
                                                @csrf
                                                <div class="wpforms-field-container"
                                                     style="display: flex;flex-direction: column;gap: 15px">
                                                    <div id="wpforms-473-field_0-container"
                                                         class="wpforms-field wpforms-field-name" data-field-id="0">
                                                        <input
                                                            type="text" id="wpforms-473-field_0"
                                                            class="wpforms-field-large wpforms-field-required"
                                                            style="width: 100%"
                                                            name="name" placeholder="Name" required>
                                                    </div>
                                                    <div id="wpforms-473-field_1-container"
                                                         class="wpforms-field wpforms-field-email" data-field-id="1">
                                                        <input
                                                            type="email" id="email"
                                                            class="wpforms-field-large wpforms-field-required"
                                                            style="width: 100%"
                                                            name="email" placeholder="Email"
                                                            spellcheck="false" required></div>
                                                    <div id="wpforms-473-field_2-container"
                                                         class="wpforms-field wpforms-field-textarea" data-field-id="2">
                                                       <textarea id="wpforms-473-field_2"
                                                                 class="wpforms-field-medium"
                                                                 name="purpose"
                                                                 style="width: 100%"
                                                                 placeholder="Write Message Purpose"
                                                                 required></textarea>
                                                    </div>
                                                </div><!-- .wpforms-field-container -->
                                                <div class="wpforms-submit-container">
                                                    <button type="submit"
                                                            class="wpforms-submit" data-alt-text="Sending..."
                                                            data-submit-text="Submit" aria-live="assertive"
                                                            value="wpforms-submit">Submit
                                                    </button>
                                                    <img decoding="async"
                                                         src="https://sky-mrk.com/wp-content/plugins/wpforms-lite/assets/images/submit-spin.svg"
                                                         class="wpforms-submit-spinner" style="display: none;"
                                                         width="26" height="26" alt="Loading"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
