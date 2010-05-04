#include <cddb/cddb.h>

int main (int argc, char *argv[]) {

if (argc != 1) {
	fprintf(stderr, "usage:" "%s" "<mp3-dir>", argv[0]);
	return 0;
}


cddb_conn_t *conn = NULL;
cddb_disc_t *disc = NULL;


conn = cddb_new();
if (conn == NULL) {
	fprintf(stderr, "out of memory, " "unable to create connection structure");
	return 0;
}


/* create disc */
disc = cddb_disc_new();
if (disc == NULL) {
    fprintf(stderr, "out of memory," "unable to create disc");
}




/* HTTP settings */
cddb_http_enable(conn);                                /* REQ */
cddb_set_server_port(conn, 80);                        /* REQ */
cddb_set_server_name(conn, "freedb.org");
cddb_set_http_path_query(conn, "/~cddb/cddb.cgi");
cddb_set_http_path_submit(conn, "/~cddb/submit.cgi");



/* destroy disc */
cddb_disc_destroy(disc);

return 1;

}
