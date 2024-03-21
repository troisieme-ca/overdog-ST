(function ($R) {
   /*
   * PLUGIN NAME VAR - your js filename must match it and add this name to your editor plugins list.
   */
   const pluginName = "custom"
   const buttonTitle = "Custom Styles"

   // config
   $R.add("plugin", pluginName, {

      /*
     * tell Redactor which API services you need for your plugin
     * https://imperavi.com/redactor/docs/api-services for details
     */
      init: function (app) {
         this.app = app
         this.toolbar = app.toolbar
         this.insertion = app.insertion // used to insert character
         this.inline = app.inline // used to apply inline style
         this.block = app.block // used to apply block style
      },

      /*
     * PUBLIC
     */
      start: function () {
         // create dropdown object - add yours here and add the corresponding function in the private section
         const dropdownData = {
            item1: {
               title: "Non-breaking space",
               api: `plugin.${pluginName}.function1`
            }
         }

         // create the button data
         const buttonData = { title: buttonTitle }
         // create the button
         const $button = this.toolbar.addButton(pluginName, buttonData)
         // create the dropdown
         // eslint-disable-next-line no-unused-vars
         const dropdown = $button.setDropdown(dropdownData)
      }, // end public

      /*
     * PRIVATE - FUNCTIONS FOR EACH BUTTON
     */

      function1: function () {
         this.insertion.insertChar("&nbsp;")
      }

   }) // end $R plugin
   // eslint-disable-next-line no-undef
})(Redactor)
