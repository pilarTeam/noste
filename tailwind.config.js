/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./src/**/*.{html,js}"],
    theme: {
        colors: {
            ancent: '#00B2A9',
            heading: '#101828',
            text: '#344054',
            lightGray: '#818D93',
            graybg: '#FCFCFD',
            gray: '#E1E1EA',
            green: '#06F9B7',
            darkGray: '#586B74'
        },
        fontFamily: {
            'roboto': ['"Roboto"'],
        },
        fontSize: {
            xs: '14px',
            sm: '16px',
            base: '16px',
            xm: '18px',
            md: '22px',
            lg: '24px',
            xl: '32px',
        },        
        extend: {
            width: {
                'sm': '700px',
              }            
        },
    },
    plugins: [],
  }