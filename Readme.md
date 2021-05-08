## Adapter Design Pattern in PHP
Adapter design pattern allows objects with incompatible interfaces to collaborate with each other

---

### File 
- ```write(string $file_name, string $data) : string```
- ```read(string $file_name) : string```

### Redis 
- ```set(string $key, string $value) : string ```
- ```get(string $key) : string```

### Redis Adapter
This class is responsible for adapting Redis functionality into the File interface.