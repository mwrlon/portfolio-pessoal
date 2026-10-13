// Configuração do Tailwind (CDN) - cores, fontes e animações do tema
tailwind.config = {
    darkMode: 'class',
    theme: {
        extend: {
            fontFamily: {
                sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                mono: ['"JetBrains Mono"', 'monospace'],
            },
            colors: {
                brand: {
                    50: '#fff1f2',
                    100: '#ffe4e6',
                    400: '#fb7185',
                    500: '#f43f5e',
                    600: '#e11d48',
                    pink: '#ec4899',
                    dark: '#09090b',
                    card: '#121217',
                    border: '#27272a',
                    violet: '#8b5cf6',
                    cyan: '#06b6d4'
                }
            },
            animation: {
                'pulse-glow': 'pulseGlow 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                'float': 'float 6s ease-in-out infinite',
                'gradient-x': 'gradientX 8s ease infinite',
            },
            keyframes: {
                pulseGlow: {
                    '0%, 100%': { opacity: 0.4, transform: 'scale(1)' },
                    '50%': { opacity: 0.8, transform: 'scale(1.05)' },
                },
                float: {
                    '0%, 100%': { transform: 'translateY(0px)' },
                    '50%': { transform: 'translateY(-12px)' },
                },
                gradientX: {
                    '0%, 100%': { 'background-size': '200% 200%', 'background-position': 'left center' },
                    '50%': { 'background-size': '200% 200%', 'background-position': 'right center' }
                }
            }
        }
    }
}
