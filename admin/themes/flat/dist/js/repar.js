/*!
 * Repar UI - JS for Debug
 * @licence Repar UI - v0.1.0 (2014-11-04)
 * http://56hm.com/ | Licence: MIT
 */
/*
 * @name pluginName
 * @Rely require jquery 1.7+
 *
 * github resource repository:
 *   https://github.com/repar/
 *
 * usage as: 
 * $(...).pluginName({...});
 *
 * author: Repar
 * website: http://www.56hm.com
 * email: 47558328@qq.com,  yy47558328@sina.com
 * qq: 47558328
 */
;(function($, window, document, undefined) {

   var pluginName = '', /* plug-in name */
       defaults = {

       };

   function Widget(element, opts) {
      
        this.element = element;
        this.options = $.extend({}, defaults, opts);
        this.defaults = defaults;
        this.pluginName = pluginName;
        this.init();

   };


   Widget.prototype = {

       init : function() {

       }

   };

   $.fn[pluginName] = function(opts) {

        return this.each(function() {
            if (!$.data(this, "plugin_" + pluginName)) {
                $.data(this, "plugin_" + pluginName, new Widget(this, opts));
            }
        });
   };
})(jQuery, window, document);
$(function(){

    

})
/*
 * @name pluginName
 * @Rely require jquery 1.7+
 *
 * github resource repository:
 *   https://github.com/repar/
 *
 * usage as: 
 * $(...).pluginName({...});
 *
 * author: Repar
 * website: http://www.56hm.com
 * email: 47558328@qq.com,  yy47558328@sina.com
 * qq: 47558328
 */
;(function($, window, document, undefined) {

   var pluginName = 'svg', /* plug-in name */
       defaults = {

       };

   function Widget(element, opts) {
      
        this.element = element;
        this.options = $.extend({}, defaults, opts);
        this.defaults = defaults;
        this.pluginName = pluginName;
        this.init();

   };


   Widget.prototype = {

       init : function() {

       }

   };

   $.fn[pluginName] = function(opts) {

        return this.each(function() {
            if (!$.data(this, "plugin_" + pluginName)) {
                $.data(this, "plugin_" + pluginName, new Widget(this, opts));
            }
        });
   };
})(jQuery, window, document);  