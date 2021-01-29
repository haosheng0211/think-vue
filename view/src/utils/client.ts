import axios from "axios";

const client = axios.create({
  baseURL: "/api",
  headers: {
    "X-Requested-With": "XMLHttpRequest"
  },
  timeout: 15000
});

export default client;
