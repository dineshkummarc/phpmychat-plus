<?php
// File : argentinian_spanish/localized.admin.php - plus version (13.06.2011 - rev.16)
// Original translation in Spanish (for the Argentinian dialect usage) by Jorge Colaccini <jrc@informas.com>
// Updates, corrections and additions for the Plus version by Matias Olivera <matiolivera@yahoo.com>
// Fine tuning by Ciprian Murariu <ciprianmp@yahoo.com>

// extra header for charset
$Charset = "utf-8";

// medium font size in pt.
$FontSize = 10;

// Top frame
define("A_MENU_0", "Administración para %s");
define("A_MENU_1", "Usuarios registrados");
define("A_MENU_11", "Usuario registrado");
define("A_MENU_2", "Usuarios bloqueados");
define("A_MENU_21", "Usuario bloqueado");
define("A_MENU_3", "Limpiar salones");
define("A_MENU_4", "Enviar e-mails");
define("A_MENU_5", "Configuración");
define("A_MENU_6", "Extras del Chat");
define("A_MENU_7", "Buscar");
define("A_MENU_8", "Conexiones");
define("A_MENU_9", "Archivo Log");
define("A_MENU_1a", "Perfiles");
define("A_MENU_2a", "Estadísticas");
define("A_MOD_DEV", "Módulo en desarrollo");
define("A_LOGOUT", "Logout");

// Frame for registered users
define("A_SHEET1_1", "Listado de usuarios registrados y sus permisos");
define("A_SHEET1_2", "Usuario");
define("A_SHEET1_3", "Permisos");
define("A_SHEET1_4", "Salones moderados");
define("A_SHEET1_5", "Salones moderados son separados por coma (,) sin espacios.");
define("A_SHEET1_6", "Remover perfiles marcados");
define("A_SHEET1_7", "Cambiar");
define("A_SHEET1_8", "No hay usuarios registrados excepto vos.");
define("A_SHEET1_9", "Bloquear los perfiles marcados");
define("A_SHEET1_10", "Ahora tenés que ir a ’".A_MENU_2."’ para ajustar la lista.");
define("A_SHEET1_11", "Ultima conexión");
define("A_SHEET1_12", "Motivo de bloqueo (opcional)");
define("A_SHEET1_13", "Salones permitidos");
define("A_SHEET1_14", "Todos Permitidos");
define("A_SHEET1_15", "Todos Restringidos");
define("A_SHEET1_16", "La restricción especificada debe ser también activada en la sección de ’".A_MENU_5."’.");
define("A_USER", "Usuario");
define("A_MODER", "Moderador");
define("A_TOPMOD", "Moderador Principal");
define("A_ADMIN", "Administrador");
define("A_PAGE_CNT", "Página %s de %s");

// Frame for banished users
define("A_SHEET2_1", "Listado de usuarios bloqueados y salones correspondientes");
define("A_SHEET2_2", "IP");
define("A_SHEET2_3", "Salones correspondientes");
define("A_SHEET2_4", "Hasta");
define("A_SHEET2_5", "no termina");
define("A_SHEET2_6", "Los salones son separados por comas sin espacios (,) si hay menos de 4, más ’<B>*</B>’ señalar<br />bloqueados para todos los salones.");
define("A_SHEET2_7", "Remover <b>bloqueo</B> para usuario/s marcado/s");
define("A_SHEET2_8", "No hay usuarios bloqueados.");
define("A_SHEET2_9", "Motivo (opcional)");

// Frame for cleaning rooms
define("A_SHEET3_1", "Listado de salones existentes");
define("A_SHEET3_2", "Al limpiar cualquier salón que no sea el \"predeterminado\" se removerá también<br />la condición de moderador para cualquier usuario asignado al mismo como tal.");
define("A_SHEET3_3", "Limpiar salones seleccionados");
define("A_SHEET3_4", "No hay salones para limpiar.");
define("A_SHEET3_5", "No hiciste ninguna selección. Por favor selecciona al menos un salón de la lista de abajo.");

// Frame for sending mails
define("A_SHEET4_0", "No haz seteado el email de admin en la pestana de ’".A_MENU_5."’.");
define("A_SHEET4_1", "Enviar e-mails");
define("A_SHEET4_2", "A:");
define("A_SHEET4_3", "Seleccionar todo");
define("A_SHEET4_4", "Detalle:");
define("A_SHEET4_5", "Mensaje:");
define("A_SHEET4_6", "Enviar!");
define("A_SHEET4_7", "Todos los e-mails han sido enviados.");
define("A_SHEET4_8", "Error interno al enviar los e-mails.");
define("A_SHEET4_9", "Dirección/es, detalle o mensaje perdido!");
define("A_SHEET4_10", "Agregá emails, separados por comas sin espacios (,)");
define("A_SHEET4_11", "Firma");
define("A_SHEET4_12", "Deseleccionar todos");
define("A_SHEET4_13", "Ponga todos los destinatarios en el campo <b>’Bcc’</b>");

// Frame for configuration
define("A_SHEET5_0", "La versión instalado es %s");
define("A_SHEET5_1", "Hay una nueva versión disponible (%s)!");

//Chat Extras
define("A_EXTR_DSBL", "Extras del chat deshabilitados") ;
define("A_REFRESH_MSG", "Refrescar mensajes") ;
define("A_MSG_DEL", "Borrar") ;
define("A_POST_TIME", "Posteados el") ;
define("A_FROM_TO", "Desde › Hasta") ;
define("A_FROM", "Desde") ;
define("A_CHTEX_ROOM", "Salón") ;
define("A_CHTEX_MSG", "Mensaje") ;

//Save chat logs
define("A_CHAT_LOGS_1", "Logs de conexiones IP a %s"); // phpMyChat (app name)
define("A_CHAT_LOGS_2", "El archivo del Chat ha sido deshabilitado");
define("A_CHAT_LOGS_3", "Abrir página de logs IP del Chat");
define("A_CHAT_LOGS_4", "Resetear página de logs IP del Chat");
define("A_CHAT_LOGS_5", "Se reseteará y guardará el página de logs IP del Chat!\\n");
define("A_CHAT_LOGS_6", "Archivo completo de logs del Chat");
define("A_CHAT_LOGS_7", "Mostrar sección de archivación de los usuarios del chat");
define("A_CHAT_LOGS_8", "Se borrarán todos los archivos y carpetas \\nguardados en la carpeta %s !\\n"); // year
define("A_CHAT_LOGS_9", "Borrar todos los logs %s !"); // year
define("A_CHAT_LOGS_10", "Borrar año");
define("A_CHAT_LOGS_11", "Se borrarán todos los archivos \\nguardados en la carpeta %s !\\n"); // month/year
define("A_CHAT_LOGS_12", "(solamente los públicos)");
define("A_CHAT_LOGS_13", "Borrar mes");
define("A_CHAT_LOGS_14", "Se borrará el archivo %s !\\n"); // day
define("A_CHAT_LOGS_15", "Borrar este log");
define("A_CHAT_LOGS_16", "Leer log %s"); // day month year
define("A_CHAT_LOGS_17", "Archivo de logs de Chat Público");
define("A_CHAT_LOGS_18", "(solamente el público)");
define("A_CHAT_LOGS_19", "\\nEsta acción no se puede revertir...\\nDeseás continuar?");
define("A_CHAT_LOGS_20", "Mostrar la sección completa del archivo de chat");
define("A_CHAT_LOGS_21", "Volver arriba");
define("A_CHAT_LOGS_22", "Archivo Log Salvado");
define("A_CHAT_LOGS_23", "Generado el %s");
define("A_CHAT_LOGS_24", "Comprimir los %s logs en un archivo zip"); // date
define("A_CHAT_LOGS_25", "Se creará un zip con todos los logs\\nguardados en el directorio %s !\\n"); // month/year
define("A_CHAT_LOGS_26", "\\nEstás seguro?");
define("A_CHAT_LOGS_27", "Archivos Zip");
define("A_CHAT_LOGS_28", "Descargar %s");
define("A_CHAT_LOGS_29", "Borrar este zip");
define("A_CHAT_LOGS_30", "Archivos de IP");
define("A_CHAT_LOGS_31", "Tamaño total %s %s");
define("A_CHAT_LOGS_32", "Archivo");
define("A_CHAT_LOGS_33", "Directorio");
define("A_CHAT_LOGS_34", "%s se ha borrado: %s");
define("A_CHAT_LOGS_35", "%s se ha creado: %s");
define("A_CHAT_LOGS_36", "%s no existe: %s");
define("A_CHAT_LOGS_37", "%s no pudo ser eliminado: %s");
define("A_CHAT_LOGS_38", "%s no pudo crearse: %s");
define("A_CHAT_LOGS_39", "%s protegido para escritura: %s");
define("A_CHAT_LOGS_40", "Hubieron errores al guardar el archivo: %s");

//Admin Search Page
define("A_SEARCH_1", "Página de búsqueda del salón de chat");
define("A_SEARCH_2", "Todas las categorías");
define("A_SEARCH_3", "Nombres");
define("A_SEARCH_4", "Direcciones IP");
define("A_SEARCH_5", "Permisos");
define("A_SEARCH_6", "E-mail");
define("A_SEARCH_7", "Genero");
define("A_SEARCH_8", "Descripción");
define("A_SEARCH_9", "Links");
define("A_SEARCH_10", "Buscar");
define("A_SEARCH_11", "Para Categoría de Permisos, las opciones son: <b>ad</b>, <b>mod</b> ó <b>u</b>.");
define("A_SEARCH_12", "Para Categoría de Géneros, las opciones son: <b>0</b> para los no especificados, <b>1</b> para Hombre, <b>2</b> para Mujer, ó <b>3</b> para Pareja.");
define("A_SEARCH_13", "Nombre de usuario");
define("A_SEARCH_14", "Primer Nombre");
define("A_SEARCH_15", "Apellido");
define("A_SEARCH_16", "País");
define("A_SEARCH_18", "Permisos");
define("A_SEARCH_19", "IP");
define("A_SEARCH_20", "Género");
define("A_SEARCH_21", "Buscar texto");
define("A_SEARCH_22", "Buscar por");
define("A_SEARCH_23", "Por favor escribí un texto para buscar e intentá otra vez");
define("A_SEARCH_24", "No hay resultados para la búsqueda. Por favor intenta otra vez modificando el criterio.");
define("A_SEARCH_25", "Moderar a este usuario");
define("A_SEARCH_26", "El usuario ha decidido ocultar esta información en los perfiles públicos, por su privacidad. No revelamos!");
define("A_SEARCH_27", "Mostrar mes en curso");
define("A_SEARCH_28", "Mostrar todos los cumpleaños");

// Connected users Page
define("A_LURKING_1", "Usuarios conectados y solo mirando") ;
define("A_LURKING_2", "Mirones desactivados.") ;

// Statistics Page
define("A_STATS_1", "Página de Estadísticas del Chat");
define("A_STATS_2", "La recolección de datos empezó el %s"); //date
define("A_STATS_3", "Estadísticas Generales (Todos los horarios)");
define("A_STATS_4", "Estadísticas Detalladas (Últimos %s días de actividad)"); //number of days
define("A_STATS_5", "Estadísticas deshabilitadas");
define("A_STATS_6", "Primera %s"); //Top 10 or Top 5
?>