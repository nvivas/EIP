# MongoDB

# CONEXIÓN
        mongosh

# CREAR
        use clase8
        switched to db clase8

# ver BBDD
        show database

# INSERTAR
        db.peliculas.insertOne(item1)
        db.peliculas.insertMany([item2, item3, item4, item6, item7])
# ACTUALIZAR

        db.peliculas.updateOne({title: "The Hobbit"},{$set: {sinopsis: "a Hobbit reluctant....."}})



# ELIMINAR


# BUSCAR
# Obtener todos los documentos
        db.peliculas.find()

# Obtener un writer
        db.peliculas.find({"writer": 'Quentin Tarantino'})


# obtener mayor y menor

db.peliculas.find([$and: [{year:{$gt:1990}}, {year:{$glt2000}}, ]])

gt = >  --> gte
lt = < --> lte
e = igual


# crear usuario

db.createUser {
        user: 'nacho',
        pwd; 'pass',
        roles:  [ { 
                db: 'admin',
                role: 'userAdmin'
        } ]
}
