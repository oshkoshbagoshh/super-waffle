import React from 'react';
import MyComponent from '../Components/MyComponent.jsx';
import MainLayout from '../Layouts/MainLayout.jsx'
import Hero from '@/Components/Hero.jsx';
import About from '@/Components/About.jsx';
import Services from '@/Components/Services.jsx';
import FAQ from '@/Components/FAQ.jsx';
import ContactForm from '@/Components/ContactForm.jsx';

// function
export default function Home() {
    return (
        <MainLayout>
            <Hero />
            <About />
            <Services />
            <ContactForm />
            <FAQ />
        </MainLayout>

    );
}

