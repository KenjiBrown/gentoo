# Copyright 1999-2020 Gentoo Authors
# Distributed under the terms of the GNU General Public License v2

EAPI=6

# CMAKE_IN_SOURCE_BUILD="1"
inherit cmake-utils

DESCRIPTION="Qt blogging client"
HOMEPAGE="http://qtm.blogistan.co.uk"
# FIXME find suitable SRC_URI
SRC_URI="https://bitbucket-archive.softwareheritage.org/static/3c/3c8ca320-701e-47dc-b0ec-28870df5715b/attachments/${P}.tar.bz2"

LICENSE="GPL-2"
SLOT="0"
KEYWORDS="amd64 x86"
IUSE="dbus debug"
RESTRICT="strip"

RDEPEND="dev-lang/perl
	dev-qt/qtcore:5
	dev-qt/qtgui:5
	dev-qt/qtnetwork:5
	dev-qt/qtwidgets:5
	dev-qt/qtxml:5
	virtual/perl-Digest-MD5
	dbus? ( dev-qt/qtdbus:5 )"
DEPEND="${RDEPEND}
	x11-base/xorg-proto
	virtual/pkgconfig"

DOCS=( Changelog README )

PATCHES=( "${FILESDIR}/${P}-qt-5.11.patch" ) # TODO: upstream

src_prepare() {
	# bug 463810
	sed -i -e '/Categories/s/Application;//' qtm-desktop.sh || die 'sed on qtm-desktop.sh failed'

	cmake-utils_src_prepare
}

src_configure() {
	local mycmakeargs=(
		-DQt5=ON
		-DDONT_USE_PTE=OFF
		-DINSTALL_MARKDOWN=ON
		-DNO_SSL=OFF
		-DUSE_DBUS=$(usex dbus)
		-DDONT_USE_DBUS=$(usex !dbus)
		-DQDEBUG=$(usex debug)
	)

	cmake-utils_src_configure
}
