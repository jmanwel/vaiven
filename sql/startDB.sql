CREATE DATABASE IF NOT EXISTS vaivendb;

/*TABLAS A CREAR (en orden)

- Rol (id_rol, description_rol)
- User (id_user, nick_user, name_user, lastname_user, email_user, pass_user, activity_user, saldo_user, rol_id)
- Categoria (id_categoria, categoria, cantidad de busquedas)
- Metodo de pago (id_mdp, description_mdp)
- Metodos de entrega (id_mde, description_mde)
- Ubicacion (id_ubi, descrption_ubi)
- Comentario Publico (id_comenPu, id_user_compra [FK], id_user_venta [FK], description_comePu)
- Comentario Privado (id_comenPr, id_user_compra [FK], id_user_venta [FK], description_comePr)
- Publicacion (id_publicacion, id_categoria [FK], titulo_publi, imagen, cantidad_publi, precio_publi, comision_publi (4%), duracion_publi, id_mmde [FK], id_ubicacion [FK], id_user_venta [FK], cantidad_busquedas_publi)
- Calificacion (id_cali, id_user_compra [FK], id_user_venta [FK], description_cali)
- Compra (id_compra, id_user_compra [FK], id_publicacion [FK], id_mdpago [FK], id_mde [FK])

- Las estadisticas son una consulta ordenada de la cantidad de busquedas y una consulta ordenada de los montos mas gastados.
- La facturacion es una consulta con la suma de todo lo que se cobro por comision.

*/