import axios from 'axios';

const app = axios.create({
  baseURL: 'http://localhost:8000',
//   headers: {
//     'Authorization': 'Bearer TOKEN'
//   }
});

export default app;