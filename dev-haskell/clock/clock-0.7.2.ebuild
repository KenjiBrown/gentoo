# Copyright 1999-2020 Gentoo Authors
# Distributed under the terms of the GNU General Public License v2

EAPI=6

# ebuild generated by hackport 0.4.7.9999
#hackport: flags: -llvm

CABAL_FEATURES="lib profile haddock hoogle hscolour" # Drop test-suite: circular depends
inherit haskell-cabal

DESCRIPTION="High-resolution clock functions: monotonic, realtime, cputime"
HOMEPAGE="https://github.com/corsis/clock"
SRC_URI="https://hackage.haskell.org/package/${P}/${P}.tar.gz"

LICENSE="BSD"
SLOT="0/${PV}"
KEYWORDS="~amd64 ~x86"
IUSE=""

RESTRICT=test # circular depend: tasty->clock[test]->tasty

RDEPEND=">=dev-lang/ghc-7.4.1:=
"
DEPEND="${RDEPEND}
	>=dev-haskell/cabal-1.8
"

src_configure() {
	haskell-cabal_src_configure \
		--flag=-llvm
}
