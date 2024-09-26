// resources/js/Layouts/MainLayout.jsx
import React from 'react';
import {Link} from '@inertiajs/react';
import ApplicationLogo from '@/Components/ApplicationLogo';

export default function MainLayout({children}) {
    return (
        <div className="flex flex-col min-h-screen">
            {/* Header */}
            <header className="bg-white shadow">
                <div className="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
                    <Link href="/">
                        <ApplicationLogo className="h-10 w-10 fill-current text-gray-500"/>
                    </Link>
                    <nav>
                        <ul className="flex space-x-4">
                            <li><Link href="/" className="text-gray-700 hover:text-gray-900">Home</Link></li>
                            <li><Link href="/about" className="text-gray-700 hover:text-gray-900">About</Link></li>
                            <li><Link href="/services" className="text-gray-700 hover:text-gray-900">Services</Link>
                            </li>
                            <li><Link href="/faq" className="text-gray-700 hover:text-gray-900">FAQ</Link></li>
                            <li><Link href="/contact" className="text-gray-700 hover:text-gray-900">Contact</Link></li>
                        </ul>
                    </nav>
                </div>
            </header>

            {/* Main content */}
            <main className="flex-grow">
                {children}
            </main>

            {/* Footer */}
            <footer className="bg-gray-800 text-white">
                <div className="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-center">
                    <p>&copy; 2024 Three First Names & Associates. All rights reserved.</p>
                </div>
            </footer>
        </div>
    );
}
