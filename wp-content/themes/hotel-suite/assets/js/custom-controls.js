(function(api) {

    api.sectionConstructor['hotel-suite-upsell'] = api.Section.extend({
        attachEvents: function() {},
        isContextuallyActive: function() {
            return true;
        }
    });

    const hotel_suite_section_lists = ['banner', 'service'];
    hotel_suite_section_lists.forEach(hotel_suite_homepage_scroll);

    function hotel_suite_homepage_scroll(item, index) {
        item = item.replace(/-/g, '_');
        wp.customize.section('hotel_suite_' + item + '_section', function(section) {
            section.expanded.bind(function(isExpanding) {
                wp.customize.previewer.send(item, { expanded: isExpanding });
            });
        });
    }
})(wp.customize);