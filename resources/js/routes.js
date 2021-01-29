import Profile from './components/Profile';
import Login from './components/Login';
import Home from './components/Home';
import Register from './components/Register';
import Dashbroad from './components/Dashboard';


export default{
    mode: 'history',
    routes:[
        {
            path:'/',
            component: Login
        },
        {
            path:'/home',
            component: Home
        },
        {
            path:'/userprofile',
            component: Profile
        },
        {
            path:'/login',
            component: Login
        },
        {
            path:'/register',
            component: Register
        },
        {
            path:'/dashbroad',
            component: Dashbroad
        },
    ]
}