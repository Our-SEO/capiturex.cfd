class MobileMenu {
  constructor(options = {}) {
    this.trigger = document.querySelector("[data-menu-btn]");
    this.closeBtn = document.querySelector("[data-menu-close]");
    this.menu = document.querySelector("[data-menu]");
    this.scrollLockClass = "overflow-hidden";
    this.className = "active";
    this.isOpen = false;

    this.isLocked = false;

    this.init();
  }
  open() {
    if (this.isOpen) return;
    document.body.classList.add(this.scrollLockClass);
    this.menu.classList.add(this.className);
    this.isOpen = true;
  }

  close() {
    if (!this.isOpen) return;
    document.body.classList.remove(this.scrollLockClass);
    this.menu.classList.remove(this.className);
    this.isOpen = false;
  }
  init() {
    this.trigger.addEventListener("click", () => this.toggle());
    this.closeBtn.addEventListener("click", () => this.close());

    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape" && this.isOpen) this.close();
    });
    document.addEventListener("click", (e) => this.handleClick(e));
    this.close();
  }

  toggle() {
    if (this.isLocked) return;
    this.isLocked = true;
    this.isOpen ? this.close() : this.open();
    this.isLocked = false;
  }
  handleClick(e) {
    if (!this.isOpen) return;
    const { target } = e;
    const { nodeName } = target;
    const isInteractive =
      nodeName === "A" ||
      nodeName === "BUTTON" ||
      nodeName === "INPUT" ||
      target.hasAttribute("onclick") ||
      target.getAttribute("role") === "button";
    if (isInteractive && target != this.trigger) this.close();
  }
}
new MobileMenu();
