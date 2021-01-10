# Copyright 1999-2020 Gentoo Authors
# Distributed under the terms of the GNU General Public License v2

EAPI=7

# ebuild generated by hackport 0.6.6.9999
#hackport: flags: -bootstrap_external

CABAL_FEATURES="lib profile haddock hoogle hscolour"
inherit haskell-cabal

DESCRIPTION="Attribute Grammar System of Universiteit Utrecht"
HOMEPAGE="http://www.cs.uu.nl/wiki/HUT/WebHome"
SRC_URI="https://hackage.haskell.org/package/${P}/${P}.tar.gz"

LICENSE="BSD"
SLOT="0/${PV}"
KEYWORDS="~amd64 ~x86"
IUSE="loag"

RDEPEND=">=dev-haskell/haskell-src-exts-1.11.1:=[profile?]
	>=dev-haskell/mtl-1.1.1.1:=[profile?]
	>=dev-haskell/uuagc-cabal-1.0.2.0:=[profile?]
	>=dev-haskell/uulib-0.9.14:=[profile?]
	>=dev-lang/ghc-7.4.1:=
	loag? ( dev-haskell/minisat:=[profile?] )
"
DEPEND="${RDEPEND}
	>=dev-haskell/cabal-1.10
"

src_configure() {
	haskell-cabal_src_configure \
		--flag=-bootstrap_external \
		$(cabal_flag loag with-loag)
}
