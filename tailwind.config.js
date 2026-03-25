export default {
  content: ['./index.html', './partials/**/*.html', './src/**/*.{ts,js,html}'],
  theme: {
    extend: {
      colors: {
        'primary-blue': '#0B3C5D',
        'secondary-blue': '#123F6B',
        'accent-orange': '#F47C20',
        'accent-orange-light': '#FF8C2A',
        'light-gray': '#F4F4F4',
        gray: '#EDEDED',
        'dark-gray': '#333333',
        'near-black': '#1F1F1F',
      },
      boxShadow: {
        soft: '0 12px 30px rgba(11, 60, 93, 0.12)',
      },
    },
  },
  plugins: [],
}
