export const customRoutes = [
    /** Rotas mais abrangentes */
    {
        path: '/app',
        component: () => import('./../views/app/App.vue'),
        label: "App",
        name: "app",
        inNav: false,
        children: [
            {
                path: '/app/dashboard',
                component: () => import('./../views/app/Dashboard/Dashboard.vue'),
                label: "Dashboard",
                name: "dashboard",
                inNav: true
            },
            {
                path: '/app/uf',
                component: () => import('./../views/app/Uf/Uf.vue'),
                label: "Uf",
                name: "uf",
                inNav: true
            },
            {
                path: '/app/contracts',
                component: () => import('./../views/app/Contracts/Contracts.vue'),
                label: "Contratos",
                name: "contratos",
                inNav: true
            },
            {
                path: '/app/properties/status',
                component: () => import('./../views/app/Properties/Status/Status.vue'),
                label: "Status das Propriedades",
                name: "properties-status",
                inNav: true
            },

            /** Rotas referentes às propriedades */
            {
                path: '/app/properties',
                component: () => import('./../views/app/Properties/Properties.vue'),
                label: 'Propriedades',
                name: 'properties',
                inNav: true
            },
            {
                path: '/app/properties/:id',
                component: () => import('./../views/app/Properties/Property/Property.vue'),
                label: 'Propriedade',
                name: 'property',
                inNav: false
            },
            {
                path: '/app/properties/contract',
                component: () => import('./../views/app/Properties/Contract/Contract.vue'),
                label: 'Contrato da Propriedade',
                name: 'property-contract',
                inNav: false
            },
        ]
    },

    { path: '', redirect: "/app", inNav: false }
];