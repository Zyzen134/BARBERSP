import './bootstrap';
import React, { StrictMode } from 'react';
import { createRoot } from 'react-dom/client';
import App from './barbershop/App';

const rootElement = document.getElementById('root');

if (rootElement) {
    createRoot(rootElement).render(
        React.createElement(
            StrictMode,
            null,
            React.createElement(App)
        )
    );
}
