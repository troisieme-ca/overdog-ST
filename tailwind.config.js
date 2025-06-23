const plugin = require("tailwindcss/plugin")

module.exports = {

   presets: [
      require("./tailwindcss-preset")
   ],

   // will be default in v4 https://github.com/tailwindlabs/tailwindcss/pull/8394
   future: {
      hoverOnlyWhenSupported: true
   },

   /*
   --------------------------------------------------------------------------
   CONTENT TO WATCH
   Note : If you add folders in your templates folder, list them here to allow TW to scan them
   Folders needs to be specific to avoid watching files modified by Webpack (style and script.twig, etc.)
   --------------------------------------------------------------------------
   */
   content: [
      "./templates/_base/**/*",
      "./templates/_macros/**/*",
      "./templates/_matrix/**/*",
      "./templates/_navigation/**/*",
      "./templates/_sections/**/*",
      "./templates/_shared/**/*",
      "./templates/404.twig",
      "./src/js/**/*.js"
   ],

   theme: {
      /*
      --------------------------------------------------------------------------
      FLUID CLASSES
      You can use screens keys or pixel values for minScreen and maxScreen
      Values must be in PX
      --------------------------------------------------------------------------
      */
      fluidCSS: {
         "fluid-logo-height": { prop: "height", minSize: "18px", maxSize: "36px", minScreen: "sm", maxScreen: "xxl" },
         "fluid-button-width": { prop: "width", minSize: "40px", maxSize: "48px", minScreen: "sm", maxScreen: "xxl" },
         "fluid-button-height": { prop: "height", minSize: "40px", maxSize: "48px", minScreen: "sm", maxScreen: "xxl" },
         "fluid-text-48px": { prop: "font-size", minSize: "28px", maxSize: "48px", minScreen: "500px", maxScreen: "xxl" }
      },
      /*
      -------------------------------------
      FONTS FAMILY
      -------------------------------------
      */
      fontFamily: {
         body: ["Helvetica", "arial", "sans-serif"],
         title: ["Helvetica", "arial", "sans-serif"]
      },
      /*
      -------------------------------------
      FONTS SIZE
      -------------------------------------
      */
      fontSize: {
         sm: ["14px", "20px"],
         base: ["16px", "24px"],
         lg: ["20px", "28px"],
         // exemple with lineHeight - See docs for infos
         xl: ["24px", { lineHeight: "32px" }],
         xxl: ["32px", { lineHeight: "48px" }]
      },
      /*
      -------------------------------------
      EXTEND
      -------------------------------------
      */
      extend: {
         colors: {
            blue: {
               DEFAULT: "#4480CF",
               50: "#D6E3F5",
               100: "#C6D8F0",
               200: "#A6C2E8",
               300: "#85ACE0",
               400: "#6596D7",
               500: "#4480CF",
               600: "#2D65AE",
               700: "#214B82",
               800: "#163155",
               900: "#0A1729",
               950: "#050B12"
            }
         }
      }
   },
   /*
   --------------------------------------------------------------------------
   PLUGINS
   --------------------------------------------------------------------------
   */
   plugins: [
      plugin(function ({ addVariant }) {
         addVariant("is-open", "&[data-fn-is-open]")
         addVariant("parent-is-open", "[data-fn-is-open] &")

         // Navigation panel
         addVariant("nav-open-1", "[data-fn-nav-open='1'] &")

         // Navigation panel body state
         addVariant("body-nav-open-1", "&[data-fn-nav-open='1']")
      }),
      require("@3ejoueur/tailwindcss-fluid-properties")
   ]
}
