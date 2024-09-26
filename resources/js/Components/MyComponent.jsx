import React from 'react';

export default function MyComponent({ title }) {
  return (
    <div className="container">
      <h1>{title}</h1>
      <p>This is a paragraph with your styles applied.</p>
      <button className="button">Click me</button>
    </div>
  );
}


