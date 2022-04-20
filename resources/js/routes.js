import ExampleComponent from './components/ExampleComponent';
export const routes = [
    {
        path: '/ExampleComponent',
        component: ExampleComponent
      },
      {
        path: '/',
        redirect: '/ExampleComponent'
      },
];