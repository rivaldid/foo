#!/bin/bash

# settings
pkg="gwibber-bzr"
workspace="/home/dax/pkg/workspace"

# local
foo="$(LANG=C pacman -Qi "$pkg" | awk '/^Version/ {print $3}')"

# remote
cd "$workspace"
wget "http://aur.archlinux.org/packages/$pkg/$pkg.tar.gz"
tar -xf "$pkg.tar.gz"
rm "$pkg.tar.gz"
cd "$pkg"
bar="$(makepkg -o 2>&1 | awk -v "pkg=$pkg" '$0 ~ pkg {print $6}')"

# feedback
baz=$(vercmp "$foo" "$bar")
if [[ "$baz" == "0" ]]; then
	echo "niente appòst, $pkg versione $foo."
else {
	echo "noi c'abbiamo $pkg versione $foo, mentre sul repo sta la versione $bar"
	echo "mo ti faccio l'aggiornamento..."
	cd "$workspace/$pkg"
	makepkg -si
} fi
