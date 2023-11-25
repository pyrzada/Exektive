<section
    class="elementor-section elementor-top-section elementor-element elementor-element-351ecd9 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
    data-id="351ecd9"
    data-element_type="section"
    data-settings='{"background_background":"classic"}'
>
    <div class="elementor-container elementor-column-gap-no">
        <div
            class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a01ab66"
            data-id="a01ab66"
            data-element_type="column"
        >
            <div
                class="elementor-widget-wrap elementor-element-populated"
            >
                <div
                    class="elementor-element elementor-element-0c9eb73 elementor-widget-mobile__width-inherit elementor-widget elementor-widget-heading"
                    data-id="0c9eb73"
                    data-element_type="widget"
                    data-widget_type="heading.default"
                >
                    <div class="elementor-widget-container">
                        <h2
                            class="elementor-heading-title elementor-size-default"
                        >
                            Brands We Work With
                        </h2>
                    </div>
                </div>
                <section
                    class="elementor-section elementor-inner-section elementor-element elementor-element-978d267 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="978d267"
                    data-element_type="section"
                >
                    <div
                        class="elementor-container elementor-column-gap-default"
                    >
                        @foreach($brands as $brand)
                            <div
                                class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-2e19756"
                                data-id="2e19756"
                                data-element_type="column"
                            >
                                <div
                                    class="elementor-widget-wrap elementor-element-populated"
                                >
                                    <div
                                        class="elementor-element elementor-element-c5c84ef elementor-widget elementor-widget-image"
                                        data-element_type="widget"
                                        data-widget_type="image.default"
                                    >
                                        <div class="elementor-widget-container">
                                            <a href="/">
                                                <img
                                                    decoding="async"
                                                    width="717"
                                                    height="157"
                                                    src="{{asset($brand->logo_path)}}"
                                                    class="attachment-large size-large wp-image-441"
                                                    alt=""
                                                    sizes="(max-width: 717px) 100vw, 717px"
                                                />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
