/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
  "./PUBLIC/partials_user/nav.php",
  "./PUBLIC/partials_admin/nav.php",

  "./PUBLIC/partials_user/menu.php",
  "./PUBLIC/partials_admin/menu.php",

  "./PUBLIC/partials_user/footer.php",
  "./PUBLIC/partials_admin/footer.php",



  "./PUBLIC/php_user/index.php",
  "./PUBLIC/php_admin/index.php",

  "./PUBLIC/php_user/register.php",

  "./PUBLIC/php_user/login.php",
  "./PUBLIC/php_admin/login.php",

  "./PUBLIC/php_user/home.php",

  "./PUBLIC/php_user/forgot_password.php",



  "./PUBLIC/php_admin/manage_admin.php",



  "./PUBLIC/js/script.js",
  "./PUBLIC/js/email.js",



  "./SRC/css_user/style.css",
  "./SRC/css_admin/style.css",

  "./PUBLIC/css_user/style.css",
  "./PUBLIC/css_admin/style.css"
  ],
  theme: {
    extend: {
      screens: {
        xs: '300px',/** 300-639 || mobile phones || am done */
      },
      colors: {
        primary:"var(--primary)",
        primary2:"var(--primary2)",

        primary3:"var(--primary3)",
        primary3b:"var(--primary3b)",

        primary4:"var(--primary4)",
        primary4b:"var(--primary4b)",

        primary5:"var(--primary5)",
        primary5b:"var(--primary5b)",

        light_bg_bright:"var(--bg_bright)",

        light_bg_bright2:"var(--bg_bright2)",

        light_bg_dim:"var(--bg_dim)",

        light_bg_dim2:"var(--bg_dim2)",

        light_border_bright:"var(--border_bright)",

        light_border_dim:"var(--border_dim)",

        light_txt:"var(--light_txt)",

        light_txt2:"var(--light_txt2)",
      },
      fontFamily: {
        clicker: [
          'Clicker Script',
        ],
        poppins: [
          'Poppins',
        ],
      },
    },
  },
  plugins: [],
}
